
<?php function extractFolderNumber($path){
        $folderName = basename(realpath($path));
        if (preg_match('/(\d+)$/', $folderName, $matches)) {
            return (int)$matches[1];
        }
        //otherwise:
        return null;
        
    }
?>