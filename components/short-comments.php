<?php
/*
 *  Template Name: short-comments
 *  The template for the comments below the post content in the skysvinyl theme
 *  @package WordPress
 *  @subpackage skysvinyl
 *  @since skysvinyl 1.0
*/
 ?>
<div class="container">
  <!-- Comments title -->
  <h3 class="cmmntsHdr">Your Thoughts</h3>
  <!--
    * I need to figure out what the function in wordpress is to call the user name, i guessed it's the_user(); I also need to figure out the wp frunction for the url to the user's page and for the option to log out.
  -->
  <div class="row">
    <!-- User comments section - link to user profile | logout | comment form-->
    <div class="col-12">
      <div class="card cmmntsCrd">
        <div class="card-body">
          <!-- link to user profile | logout -->
          <h5 class="cmmntsUsrLink card-subtitle">Logged in as <a class="cmmntsUsrLink"href="">UserName</a> <a class="cmmntsUsrLink" href="">Log out?</a></h5>
          <!-- comment form-->
          <form>
            <div class="form-group row mt-2">
              <label for="inputComment" class="col-sm-3 col-form-label align-self-end myFormCntrl">Comment</label>
              <div class="col-sm-9">
                <textarea class="form-control " id="inputComment" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col">
                <button type="submit" class="btn cstmBtn">Post Comment</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
