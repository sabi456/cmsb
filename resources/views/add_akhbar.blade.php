
<!DOCTYPE html>
<html lang="en">
    @section('active_p')
        active
    @endsection
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ajouter Akhbar</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
<link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<script src="https://cdn.tiny.cloud/1/chavbvxo1halhge332zt7zk1v0f3sih6i43mrymyjpg8fok3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/viewerjs@1.10.0/dist/viewer.min.css">
  <script src="https://cdn.jsdelivr.net/npm/viewerjs@1.10.0/dist/viewer.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/mammoth@1.4.0/mammoth.browser.min.js"></script>
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>

</style>
<script type="text/javascript" src="{{ asset('jscripts/tiny_mce/tiny_mce.js')}}"></script>
<script src="{{ asset('jscripts/tiny_mce/tinymce.js') }}"></script>


<script>
     tinymce.init({
  selector: 'textarea[name="detail"]',
  plugins: 'advlist autolink lists link image charmap print preview hr anchor searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table emoticons template paste help paste_word',
  toolbar: 'undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | link image media | charmap emoticons | code',
  toolbar_mode: 'floating',
  height: 500,
  image_caption: true,
  image_advtab: true,
  image_dimensions: false,
  image_uploadtab: true,
  media_dimensions: false,
  paste_data_images: false,
  paste_as_text: false,
  nonbreaking_force_tab: true,
  nonbreaking_force_table: true,
  nonbreaking_descendants: true,
  contextmenu: "link image inserttable | cell row column deletetable",
  templates: [
    {
      title: 'Basic Template',
      content: '<h1>Template Content</h1><p>This is a basic template.</p>'
    },
    {
      title: 'Another Template',
      content: '<h2>Another Template</h2><ul><li>Item 1</li><li>Item 2</li></ul>'
    }
  ],
  content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
  file_picker_types: 'image',
  file_picker_callback: function(callback, value, meta) {
  var input = document.createElement('input');
  input.setAttribute('type', 'file');
  input.setAttribute('accept', 'image/*');

  // Handle file selection
  input.onchange = function() {
    var file = this.files[0];
    var reader = new FileReader();

    reader.onload = function() {
      var id = 'blobid' + (new Date()).getTime();
      var blobCache = tinymce.activeEditor.editorUpload.blobCache;
      var base64 = reader.result.split(',')[1];
      var blobInfo = blobCache.create(id, file, base64);
      blobCache.add(blobInfo);

      // Create a canvas element to resize the image
      var canvas = document.createElement('canvas');
      var context = canvas.getContext('2d');

      var img = new Image();
      img.onload = function() {
        // Calculate the aspect ratio of the image
        var aspectRatio = img.width / img.height;

        // Define the target size
        var targetWidth = 300;
        var targetHeight = 300;

        // Calculate the new dimensions while maintaining the aspect ratio
        if (aspectRatio > 1) {
          targetHeight = targetWidth / aspectRatio;
        } else {
          targetWidth = targetHeight * aspectRatio;
        }

        // Set the canvas dimensions
        canvas.width = targetWidth;
        canvas.height = targetHeight;

        // Draw the image on the canvas with the new dimensions
        context.drawImage(img, 0, 0, targetWidth, targetHeight);

        // Convert the canvas image to a base64 data URL
        var resizedBase64 = canvas.toDataURL('image/jpeg');

        // Pass the resized image data to the callback
        callback(resizedBase64, { title: file.name });
      };

      // Load the image data into the img element
      img.src = reader.result;
    };

    reader.readAsDataURL(file);
  };

  input.click();
  }
});
</script>

</head>


<body id="page-top">
        <!-- Page content goes here -->
        <div id="wrapper">
            @include('master.side_bar')
            <div class="container text-center my-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    
                <div class=" justify-content-between">
                        <h1 class="m-0 font-weight-bold text-primary mx-auto">Ajouter un événement</h1>
                        <form action="{{ route('add_akhbar')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       
                            <tr>
                                <th class="text-center">Title :</th>
                                <td>
                                    <input type="text" required value="{{old('title')}}" class="form-control" name="title">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Description :</th>
                                <td>
                                    <textarea type="text" required class="form-control" name="description" value="{{old('description')}}"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Detail :</th>
                                <td>
                                    <textarea value="{{old('detail')}}" class="form-control" name="detail"></textarea>
                                    @error('detail')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center">Date limite :</th>
                                <td>
                                    <input type="date" required  value="{{old('datePosted')}}" class="form-control" name="datePosted" >
                                    @error('datePosted')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Image :</th>
                                <td>
                                    <input type="file" value="{{old('image')}}" class="form-control" name="image" >
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                
                                        <button type="submit" class="btn btn-info">Sauvegarder</button>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{ route('show3') }}" class="btn btn-danger">Cancel</a>
                                    
                                </td>
                            </tr>
                       
                     </table>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
</body>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src= href="{{ asset('js/sb-admin-2.min.js')}}" ></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-bar-demo.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/ce7b98fac5.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>

</html>