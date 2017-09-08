<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * The Student class represents a student object with different attributes.
 * The attributes includes surname, first name, email addresses and grades.
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
     * @param type $which Index where the email is stored.
     * @param type $address Email address being store in Student object.
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
    
    /**
     * Calculates the Student object's grades average by summing the grades
     * and dividing the sum by the number of grades.
     * 
     * @return type Calculated average of the Student's grades.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Returns a string representation of the Student object with all its
     * attributes displayed.
     * 
     * @return type String representation of the Student object.
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}

