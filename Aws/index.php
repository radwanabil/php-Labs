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


<!-- // require_once("vendor/autoload.php");

// use Aws\S3\S3Client;

// $s3 = S3Client::factory(array(
// 'credentials' => array(
// 'key' => 'AKIAQQ64IEFS7GQGYZX2',
// 'secret' => 'K0kz2Vd+u9FiINibfYHkIBMsqE8c3isTKZ5hXfLnylgFXcIg',
// ),
// 'region' => 'eu-west-3',
// 'version' => 'latest'
// ));
// try {
// $id = uniqid();
// $s3->upload('itilabphp', $id, fopen('contacts.txt', "r+"));
// } catch (Aws\S3\Exception\S3Exception $e) {
// echo "there was an error uploading the file";
// }
// try {
// // Upload data.
// $result = $s3->putObject(array(
// 'Bucket' => 'itilabphp',
// 'Key' => 'AKIAQQ64IEFS7GQGYZX2',
// 'SourceFile' => 'contacts.txt',
// 'ACL' => 'public-read',

// ));
// // Print the URL to the object.
// echo $result['ObjectURL'] . "\n";
// } catch (Aws\S3\Exception\S3Exception $e) {
// echo $e->getMessage() . "\n";
// } -->


<!-- 
'key' => "AKIAQQ64IEFSQM7BTRHY",
'secret' => "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", -->