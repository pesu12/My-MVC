<?php

use pesu\MakePhpComment\MakePhpComment as MakePhpComment;


/**
 * My Module test.
 *
 */
class MakePhpCommentTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test construct
     *
     * @return void
     *
     */
    public function testCreate()
    {
    }
	
    /**
     * Test makephpcomment with param $text having one line of comment( no \n)
     *
     * @return void
     *
     */
    public function testcommentoneline()
    {

        $mpc = new MakePhpComment();
        $text = "Function: Test php comment";
        $res = $mpc->makephpcomment($text);
		$exp = '/**</BR>&nbsp;* Function: Test php comment </BR>&nbsp;*/';
        $this->assertEquals($exp, $res, "Filter nl2bt failed.");		
    }	

    /**
     * Test makephpcomment with param $text having two lines of comment( 1 \n)
     *
     * @return void
     *
     */
    public function testcommenttwolines()
    {

        $mpc = new MakePhpComment();
        $text = "Function: Test php comment\\n";
        $res = $mpc->makephpcomment($text);
		$exp = '/**</BR>&nbsp;* Function: Test php comment </BR>&nbsp;*  </BR>&nbsp;*/';
        $this->assertEquals($exp, $res, "Filter nl2bt failed.");		
    }	
	
    /**
     * Test makephpcomment with param $text having three lines of comment( 2 \n)
     *
     * @return void
     *
     */
    public function testcommentthreelines()
    {

        $mpc = new MakePhpComment();
        $text = "Function: Test php comment\\n\\n";
        $res = $mpc->makephpcomment($text);
		$exp = '/**</BR>&nbsp;* Function: Test php comment </BR>&nbsp;*  </BR>&nbsp;*  </BR>&nbsp;*/';
        $this->assertEquals($exp, $res, "Filter nl2bt failed.");		
    }	
	
    /**
     * Test makephpcomment with param $text having four lines of comment( 3 \n)
     *
     * @return void
     *
     */
    public function testcommentfourlines()
    {

        $mpc = new MakePhpComment();
        $text = "Function: Test php comment\\n\\n@param string text xxxx\\n";
        $res = $mpc->makephpcomment($text);
		$exp = '/**</BR>&nbsp;* Function: Test php comment </BR>&nbsp;*  </BR>&nbsp;* @param string text xxxx </BR>&nbsp;*  </BR>&nbsp;*/';
        $this->assertEquals($exp, $res, "Filter nl2bt failed.");		
    }	
	
    /**
     * Test makephpcomment with param $text having five lines of comment( 4 \n)
     *
     * @return void
     *
     */
    public function testcommentfivelines()
    {

        $mpc = new MakePhpComment();
        $text = "Function: Test php comment\\n\\n@param string text xxxx\\n\\n@return string text xxxx";
        $res = $mpc->makephpcomment($text);
		$exp = '/**</BR>&nbsp;* Function: Test php comment </BR>&nbsp;*  </BR>&nbsp;* @param string text xxxx </BR>&nbsp;*  </BR>&nbsp;* @return string text xxxx </BR>&nbsp;*/';
        $this->assertEquals($exp, $res, "Filter nl2bt failed.");		
    }	
}
