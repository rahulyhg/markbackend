<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit careers</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editcareerssubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<div class="input-field col s6">
<label for="title">title</label>
<input type="text" id="title" name="title" value='<?php echo set_value('title',$before->title);?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<label>experience</label>
<textarea name="experience" placeholder="Enter text ..."><?php echo set_value( 'experience',$before->experience);?></textarea>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="ctc">ctc</label>
<input type="text" id="ctc" name="ctc" value='<?php echo set_value('ctc',$before->ctc);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="position">position</label>
<input type="text" id="position" name="position" value='<?php echo set_value('position',$before->position);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="location">location</label>
<input type="text" id="location" name="location" value='<?php echo set_value('location',$before->location);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="mailat">mailat</label>
<input type="text" id="mailat" name="mailat" value='<?php echo set_value('mailat',$before->mailat);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="order">order</label>
<input type="text" id="order" name="order" value='<?php echo set_value('order',$before->order);?>'>
</div>
</div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewcareers"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
