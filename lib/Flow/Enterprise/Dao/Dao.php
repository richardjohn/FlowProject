<?php

namespace Flow\Dao;

use Flow\Entity\Entity;

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author hashinpanakkaparambil
 */
interface Dao
{
    public function save(Entity $entity);

    public function getById($id);

    public function update(Entity $entity);

    public function delete(Entity $entity);
}