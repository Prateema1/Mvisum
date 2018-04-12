<?php
function fileUpload($fileUrl)
{
    if (isset($_FILES["$fileUrl"]) && $_FILES["$fileUrl"]["error"] == 0) {
        $allowedExts = array("pdf", "doc");
        $extension = pathinfo($_FILES["$fileUrl"]['name'], PATHINFO_EXTENSION);

        if (( ($_FILES["$fileUrl"]["type"] == "application/pdf")
                || ($_FILES["$fileUrl"]["type"] == "application/doc")
            )

            && ($_FILES["$fileUrl"]["size"] < 10 * 1024 * 1024)
            && in_array($extension, $allowedExts)
        ) {
            $count=1;
            while(true){

                if(file_exists("files/" . $_FILES["$fileUrl"]["name"])){
                    $_FILES["$fileUrl"]["name"]=$count.$_FILES["$fileUrl"]["name"];
                    $count=$count+1;
                }
                else
                    break;
            }
            move_uploaded_file($_FILES["$fileUrl"]["tmp_name"],
                "files/" . $_FILES["$fileUrl"]["name"]);
            $url = "files/" . $_FILES["$fileUrl"]["name"];

            return $url;


        }
    }
}
?>