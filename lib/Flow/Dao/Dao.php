<?php

namespace Flow\Dao;

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
    public function save();

    public function get();

    public function update();

    public function delete();
}