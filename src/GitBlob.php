<?php

/*
 * This file is part of the Git4P library.
 *
 * Copyright (c) 2015 Martijn van der Kleijn <martijn.niji@gmail.com>
 * Licensed under the MIT license <http://opensource.org/licenses/MIT>
 */

namespace Git4p;

/**
 * Blob object
 *
 * File format:
 * <code>
 * blob <content size>\0<content>
 * </code>
 *
 * Other data relevant to the blob is stored in a tree referencing the blob.
 *
 * @see GitTree
 */
class GitBlob extends GitObject {

    /* Blob object specific variables */
    protected $name = false;            // filename
    protected $mode = 100644;           // mode for blobs

    public function __construct($git) {
        parent::__construct($git);
    }

    public function type() {
        return GitObject::TYPE_BLOB;
    }

}
