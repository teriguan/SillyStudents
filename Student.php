<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * The Student class represents a student object with different attributes.
 *
 * @author Teresa
 */
class Student {
    
    /**
     * Constructor for the Student class.
     */
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Adds an email to the Student email attribute.
     * 
     * @param type $which Index where the email is stored
     * @param type $address Email address being store in Student object
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Adds a grade to the Student grade attribute.
     * 
     * @param type $grade Grade being store in Student object.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}
