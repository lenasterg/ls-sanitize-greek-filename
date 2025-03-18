<?php 
/**
 * Plugin Name: LS Sanitize Greek Filename
 * Description: Replaces Greek characters in filenames with their Latin equivalents upon file upload. 
 * Version: 1.0
 * Author: lenasterg
 * Requires at least: 4.6
 * Tested up to: 6.8
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Plugin URI: https://github.com/lenasterg/ls-sanitize-greek-filename
 * Author URI: https://github.com/lenasterg
 * Text Domain: ls-sanitize-greek-filenames
 * Domain Path: /languages
 * Tags: greek, filenames, sanitize
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

/**
 * Sanitize the uploaded filename by replacing Greek characters.
 * Replace Greek characters in a filename with Latin equivalents.
 *
 * @param string $filename The original filename.
 * @return string The sanitized filename with Greek characters replaced.
 */
function lssgf_replace_greek_characters($filename) {
 //   echo '<script>console.log("'.$filename.'");</script>';
    $greek = array('Ά', 'Έ', 'Ή', 'Ί', 'Ό', 'Ύ', 'Ώ', 'ΐ', 'ά', 'έ', 'ή', 'ί', 'ό', 'ύ', 'ώ', 'ϊ', 'ϋ', 'Ϊ', 'Ϋ',
                   'Α', 'Β', 'Γ', 'Δ', 'Ε', 'Ζ', 'Η', 'Θ', 'Ι', 'Κ', 'Λ', 'Μ', 'Ν', 'Ξ', 'Ο', 'Π', 'Ρ', 'Σ', 'Τ', 'Υ', 'Φ', 'Χ', 'Ψ', 'Ω',
                   'α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ', 'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'υ', 'φ', 'χ', 'ψ', 'ω');
    
    $latin = array('A', 'E', 'H', 'I', 'O', 'Y', 'O', 'i', 'a', 'e', 'h', 'i', 'o', 'y', 'o', 'i', 'y', 'I', 'Y',
                   'A', 'B', 'G', 'D', 'E', 'Z', 'H', 'TH', 'I', 'K', 'L', 'M', 'N', 'X', 'O', 'P', 'R', 'S', 'T', 'Y', 'F', 'CH', 'PS', 'O',
                   'a', 'b', 'g', 'd', 'e', 'z', 'h', 'th', 'i', 'k', 'l', 'm', 'n', 'x', 'o', 'p', 'r', 's', 't', 'y', 'f', 'ch', 'ps', 'o');
    
    return str_replace($greek, $latin, $filename);
    
}

// Apply filter to replace greek characters filenames during upload.
add_filter('sanitize_file_name', 'lssgf_replace_greek_characters', 10, 1);
