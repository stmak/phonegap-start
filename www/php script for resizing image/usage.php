<?php
   include('SimpleImage.php');
   $image = new SimpleImage();
   $image->load('picture.jpg');
   $image->resizeToWidth(250);
   $image->save('picture2.jpg');
?>

//will scale

//OR


//absolute size
<?php
   include('SimpleImage.php');
   $image = new SimpleImage();
   $image->load('picture.jpg');
   $image->resize(250,400);
   $image->save('picture2.jpg');
?>

//OR direct resize and display 
<?php
   header('Content-Type: image/jpeg');
   include('SimpleImage.php');
   $image = new SimpleImage();
   $image->load('picture.jpg');
   $image->resizeToWidth(150);
   $image->output();
?>


//OR resize an image received from form, then save
<?php
   if( isset($_POST['submit']) ) {
 
      include('SimpleImage.php');
      $image = new SimpleImage();
      $image->load($_FILES['uploaded_image']['tmp_name']);
      $image->resizeToWidth(150);
      $image->output();
   } else {
 
?>
 
   <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="uploaded_image" />
 
      <input type="submit" name="submit" value="Upload" />
 
   </form>
 
<?php
   }
?>