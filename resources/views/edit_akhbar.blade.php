
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Akhbar</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
<link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.tiny.cloud/1/chavbvxo1halhge332zt7zk1v0f3sih6i43mrymyjpg8fok3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/viewerjs@1.10.0/dist/viewer.min.css">
  <script src="https://cdn.jsdelivr.net/npm/viewerjs@1.10.0/dist/viewer.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/mammoth@1.4.0/mammoth.browser.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>

</style>
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
    <div class="container text-center my-4">
        <!-- Page content goes here -->
        
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <form action="{{ route('update_akhbar', $post->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <tr>
                                
                                <th class="text-center">ID:</th>
                                <td>
                                    <input type="text" class="form-control" name="id" value="{{$post->id}}" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Title :</th>
                                <td>
                                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                    <th class="text-center">Detail :</th>
                                    <td>
                                        <textarea class="form-control" name="detail">{{$post->detail}}</textarea>
                                        @error('detail')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </td>
                                </tr>

                            <tr>
                                <th class="text-center">DatePosted :</th>
                                <td>
                                    <input type="date" class="form-control" name="datePosted" value="{{$post->datePosted}}">
                                    @error('date_b')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Image :</th>
                                <td>
                                    <input type="file" class="form-control" name="image" value="{{$post->image}}">
                                    @error('city_b')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                           
                            <tr>
                                <th class="text-center">Date d'inscription:</th>
                                <td>
                                    <input type="text" class="form-control" name="created_at" value="{{$post->created_at}}" readonly>
                                </td>
                            </tr>
                            
                          
                            <tr>
                                <td colspan="2">
                                
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <a href="{{ route('admin') }}" class="btn btn-sm btn-secondary">Cancel</a>
                                    
                                </td>
                            </tr>
                      </form> 
                     </table>
                        
                    </div>
                </div>
            </div>
        
    </div>
</body>

</html>