<?php

function uploadedSuccess(array $uploadFile): bool {
    return isset($uploadFile['error']) && $uploadFile['error'] === UPLOAD_ERR_OK;
}

function sizeFile(array $uploadFile): bool {
    return $uploadFile['size'] < 200000;
}

function mimeType(array $uploadFile): bool {
    $finfo      = new finfo(FILEINFO_MIME_TYPE);
    $mimeType   = $finfo->file($uploadFile['tmp_name']);

    return in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif'], true);
}

function getExtensionFormMime(string $mimeType): ?string {
    switch ($mimeType) {
        case 'image/jpeg':
            return 'jpg'; 
        case 'image/png':
            return 'png';
        case 'image/gif':
            return 'gif';
        default:
            return null;
    }
}

function moveUploadFile(array $uploadFile): bool {
    $finfo      = new finfo(FILEINFO_MIME_TYPE);
    $mimeType   = $finfo->file($uploadFile['tmp_name']);

    return move_uploaded_file(
        $_FILES['file']['tmp_name'],
        sprintf('./file_avatar/%s.%s',
        sha1_file($uploadFile['tmp_name']),
        getExtensionFormMime($mimeType));
    );
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (!uploadedSuccess($_FILES['file'])) {
            throw new Exception('Erreur pendant le téléchargement, veuillez réessayer...');
        }
        
        if (!sizeFile($_FILES['file'])) {
            throw new Exception('La taille du fichier est trop grande !');
        }

        if(!mimeType($_FILES['file'])) {
            throw new Exception('Le type de fichier n\'est pas valide !');
        }

        moveUploadFile($_FILES['file']);
        
    } catch (Exception $e) {
        die($e->getMessage());
    }
}