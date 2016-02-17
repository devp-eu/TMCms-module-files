<?php

namespace TMCms\Modules\Files\Entity;

use TMCms\Orm\Entity;

/**
 * Class FileEntity
 * @package TMCms\Modules\Files\Entity
 *
 * @method string getFileName()
 * @method string getUid()
 */
class FileEntity extends Entity
{
    public function deleteObject()
    {
        // Remove file itself
        $path = $this->getPath();
        if (file_exists(DIR_BASE . $path)) {
            unlink(DIR_BASE . $path);
        }

        parent::deleteObject();
    }

    /**
     * @return string
     */
    public function getPath() {
        $hash = $this->getUid();
        if (!$hash) {
            return '';
        }

        $uid_path = $hash[0] . '/' . $hash[1] . '/' . $hash[2] . '/';

        return DIR_PUBLIC_URL . 'files/'. $uid_path . $this->getId() . '.' . $this->getExtension();
    }

    public function getExtension()
    {
        return pathinfo($this->getFileName(), PATHINFO_EXTENSION);
    }
}