<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require_once dirname(__FILE__).'/tcpdf.php';

/**
 *  pdf
 */
class Pdf extends TCPDF
{
	
	function __construct()
	{
		parent::__construct();
	}
}