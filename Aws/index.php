<?php
require_once("vendor/autoload.php");
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];   
    $temp_file_location = $_FILES['image']['tmp_name']; 

    $s3 = new Aws\S3\S3Client([
        'region'  => 'eu-west-3',
        'version' => 'latest',
        'credentials' => [
            'key'    => "AKIAQQ64IEFSQM7BTRHY",
            'secret' => "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",
        ]
    ]);		

    $result = $s3->putObject([
        'Bucket' => 'itilabphp',
        'Key'    => $file_name,
        'SourceFile' => $temp_file_location			
    ]);

    var_dump($result);
}
?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" />
</form>