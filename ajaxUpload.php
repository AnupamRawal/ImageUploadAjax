<?php

if($fileName = $_FILES['image']['name'] !=''){
  // getting file name here 
  $fileName = $_FILES['image']['name'];
  
  // save extension of file 
  $fileExtn = pathinfo($fileName,PATHINFO_EXTENSION);
  
  // checking extension match 
  $validExtn = ['jpg','jpeg','png','gif'];
  if(in_array($fileExtn,$validExtn)){
    // renaming file
    $newName = 'image'.".".date("d-m-y-h-i-s").".".$fileExtn;
    
    // path declared for upload 
    $path = "uploads/".$newName;

    // uploading image and review image
    if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
      echo '<img width="100%" Height="auto" src="'.$path.'" />
      <br><br>
      <button data-path="'.$path.'" id="dltBtn" class="btn btn-danger"> Delete image</button>';
    };
  }else{
    echo "<script>
  alert('invalid file format');
  </script>";  
  }

}else{
  // reload after alert
  echo "<script>
  alert('Please upload file');
  location.reload();
  </script>";
}

?>

