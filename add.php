
<?php
session_start(); 
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterLink</title>
    <link rel="icon" type="image/x-icon" href="assets/interlink-logo.png">

    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <style>
        body {
          overflow-y: hidden;
        }
    </style>
</head>
<body>
    <nav>
        <div class="header">
            <div class="left-header">
                <div class="logo">
                    <a href="aboutUs.html" class="interlink">
                        <div class="title">
                        InterLink
                    </div>
                    </a>
                </div>
                
                
            </div>
            
            <div class="menu">
                <a href="index.php" class="home">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="IconChangeColor" height="23" width="23"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" id="mainIconPathAttribute"></path></svg>
                </a>
                <div class="dropdown">
                  <a href="#" class="user">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zM7 12a5 5 0 0 0 10 0h-2a3 3 0 0 1-6 0H7z"/> </g> </svg>
                      <ul class="dropdown-nav">
                        <li><a href="profile.php" class="user-hover-list">User</a></li>
                        <li><a href="" class="user-hover-list">Messages</a></li>
                        <li><a href="" class="user-hover-list">Groups</a></li>
                        <li><a href="home.php" class="user-hover-list">Explore</a></li>
                        <li><a href="add.php" class="user-hover-list">Post item</a></li>
                        <li><a href="" class="user-hover-list">Saved</a></li>
                        <li><a href="aboutUs.html" class="user-hover-list">Help Center</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                  </a>
              </div>
        </div>
    </nav>

    <section>
        <form class="upload-form" action="" method="POST" enctype="multipart/form-data">
          <div class="container-upload-item">
            <div class="row">
                <div class="col-md-12">
                    Title
                    <input type="text" placeholder="add title" name="product_name">
                    Description
                    <textarea name="description" rows="10"></textarea>
                    Price
                    <input type="number" name="price">
                    Quantity
                    <input type="number" name="quantity">
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <label class="control-label">Upload Item</label>
                    <div class="preview-zone hidden">
                        <div class="box box-solid">
                        <div class="box-header with-border">
                            <div><b>Preview</b></div>

                        </div>
                        <div class="box-body"></div>
                        </div>
                    </div>
                    <div class="dropzone-wrapper">
                        <div class="dropzone-desc">
                        <i class="glyphicon glyphicon-download-alt"></i>
                        <p>Choose an image file or drag it here.</p>
                        </div>
                        <input type="file" name="product_image" class="dropzone">
                    </div>
                    </div>
              </div>
            </div>
      
            <div class="row">
              
            </div>
            <div class="col-md-12">
                <button type="submit" class="button-upload">Upload</button>
              </div>
          </div>
        </form>
      </section>

        <svg>
        <filter id="bg-filter">
            <feTurbulence type="fractalNoise" baseFrequency="7.5"/>
        </filter>
    </svg>
<script>
function readFile(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      var htmlPreview =
        '<img width="200" src="' + e.target.result + '" />' +
        '<p>' + input.files[0].name + '</p>';
      var wrapperZone = $(input).parent();
      var previewZone = $(input).parent().parent().find('.preview-zone');
      var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

      wrapperZone.removeClass('dragover');
      previewZone.removeClass('hidden');
      boxZone.empty();
      boxZone.append(htmlPreview);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function reset(e) {
  e.wrap('<form>').closest('form').get(0).reset();
  e.unwrap();
}

$(".dropzone").change(function() {
  readFile(this);
});

$('.dropzone-wrapper').on('dragover', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).removeClass('dragover');
});

$('.remove-preview').on('click', function() {
  var boxZone = $(this).parents('.preview-zone').find('.box-body');
  var previewZone = $(this).parents('.preview-zone');
  var dropzone = $(this).parents('.form-group').find('.dropzone');
  boxZone.empty();
  previewZone.addClass('hidden');
  reset(dropzone);
});

</script>
</body>
</html>