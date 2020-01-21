$(document).ready(function () {



  if (WEBGL.isWebGLAvailable() === false) {

    document.body.appendChild(WEBGL.getWebGLErrorMessage());

  }
  /* if want to get texture as color and text 

  function getTexture(i) {
    // Canvas
    var canvas = document.createElement('canvas');
    canvas.width = canvas.height = 30; // CHANGED

    var context = canvas.getContext('2d');
    context.font = '20px serif';
    context.textAlign = "center";
    context.textBaseline = "middle";

    // draw background
    context.fillStyle = '#' + Math.floor(Math.random() * 16777215).toString(16); // CHANGED
    context.fillRect(0, 0, 64, 64); // CHANGED
    // context.fillText('air', canvas.width / 2, canvas.height / 2);

    var texture = new THREE.Texture(canvas);
    texture.needsUpdate = true;
    return texture;
    }
  */

  var group, camera, scene, renderer;

  init();
  animate();

  function init() {
    var scene3d = document.getElementById("tetrahedron");
    scene = new THREE.Scene();

    renderer = new THREE.WebGLRenderer({
      alpha: true,
      antialias: true
    });

    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth, window.innerHeight);
    scene3d.appendChild(renderer.domElement);

    // camera

    camera = new THREE.PerspectiveCamera(40, window.innerWidth / window.innerHeight, 1, 1000);
    camera.position.set(15, 20, 30);
    scene.add(camera);

    // controls

    var controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.minDistance = 20;
    controls.maxDistance = 50;
    controls.maxPolarAngle = Math.PI / 2;

    scene.add(new THREE.AmbientLight(0x222222));

    // light

    var light = new THREE.PointLight(0xffffff, 1);
    camera.add(light);


    // point_ textures
    var loader = new THREE.TextureLoader();
    var texture = loader.load('assets/img/3d/disc.png');

    group = new THREE.Group();
    scene.add(group);


    // points
    var vertices = new THREE.TetrahedronGeometry(10).vertices;

    for (var i = 0; i < vertices.length; i++) {
      //vertices[ i ].add( randomPoint().multiplyScalar( 2 ) ); // wiggle the points
    }




    var pointsMaterial = new THREE.PointsMaterial({
      color: 0x0f33ff,
      map: texture,
      size: 1,
      alphaTest: 0.5

    });

    var pointsGeometry = new THREE.BufferGeometry().setFromPoints(vertices);

    var points = new THREE.Points(pointsGeometry, pointsMaterial);
    points.scale.multiplyScalar(0.76);
    group.add(points);



    /*	create tetrahedron and mapping the images on each side */

    // var geo = new THREE.TetrahedronBufferGeometry(10, 0);
    var geometry = new THREE.TetrahedronGeometry(10, 0);



    function get_texture(text) {
      var img0 = new THREE.TextureLoader().load("assets/img/3d/f.png");
      var img1 = new THREE.TextureLoader().load("assets/img/3d/w.png");
      var img2 = new THREE.TextureLoader().load("assets/img/3d/e.png");
      var img3 = new THREE.TextureLoader().load("assets/img/3d/a.png");

      var urls = [img0, img1, img2, img3];
      return urls[i];
    }



    // Texture materials
    var materials = [];

    geometry.faceVertexUvs[0] = [];

    for(var i = 0; i < geometry.faces.length; i++){
      geometry.faceVertexUvs[0].push([
        new THREE.Vector2(0, 0),
        new THREE.Vector2(0, 1),
        new THREE.Vector2(1, 1),
      ]);
      
      geometry.faces[i].materialIndex = i;
      var texture = get_texture(i);
      materials.push(new THREE.MeshBasicMaterial({
        map: texture,
        side: THREE.DoubleSide,
        wireframe: false,
        opacity: 0.95,
        transparent: true,
      }))
    };

    geometry.computeFaceNormals();
    geometry.dynamic = true;
    geometry.uvsNeedUpdate = true;





    var materials_outline = [];

    for (var i = 0; i < geometry.faces.length; i++) {
      geometry.faces[i].materialIndex = i;
      materials_outline.push(new THREE.MeshBasicMaterial({
        color: 0xffffff,
        wireframe: true, // CHANGED
        wireframeLinewidth: 1,
        side: THREE.BackSide
      }));
    };


    var tetra = new THREE.Mesh(geometry, new THREE.MeshFaceMaterial(materials));
    var tetra_outline = new THREE.Mesh(geometry, new THREE.MeshFaceMaterial(materials_outline));
    tetra_outline.position = tetra.position;
    tetra.scale.multiplyScalar(0.7);
    tetra_outline.scale.multiplyScalar(0.71);

    tetra.renderOrder = 0;
    tetra_outline.renderOrder = 0;
    group.add(tetra, tetra_outline);

    window.addEventListener('resize', onWindowResize, false);

  }


  function onWindowResize() {

    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    renderer.setSize(window.innerWidth, window.innerHeight);

  }

  function animate() {

    requestAnimationFrame(animate);

    group.rotation.y += 0.0065;

    render();

  }

  function render() {

    renderer.render(scene, camera);

  }
});