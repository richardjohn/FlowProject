<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author hashinpanakkaparambil
 * 
 * @Entity (table=customer)
 */
class Customer
{
    /**
     *
     * @Id
     */
    protected $_id;

    /**
     *
     * @Column(name=name);
     */
    protected $_name;
}