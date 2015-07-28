<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Contact <small>all message list</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list"></i>Message
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th>Full Name</th>
								<th>Contact Email</th>
								<th>Contact Phone</th>
								<th>Company</th>
								<th>Message</th>
								<th class="order desc">Send at</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							foreach($contacts as $contact)
							{
								$excert = ' <a data-toggle="modal" title="Click to see full message" data-target="#message'.$contact->id.'" >...</a>';
							?>
							<tr>
								<td><?php echo $contact->full_name; ?></td>
								<td><?php echo $contact->contact_email; ?></td>
								<td><?php echo $contact->contact_phone; ?></td>
								<td><?php echo $contact->company; ?></td>
								<td><?php echo character_limiter($contact->message, 10, $excert); ?></td>
								
								<div class="modal fade" id="message<?php echo $contact->id; ?>">
								  <div class="modal-dialog">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Message</h4>
										<?php echo $contact->full_name; ?><br><?php echo $contact->contact_email; ?><br><?php echo $contact->contact_phone; ?>
									  </div>
									  <div class="modal-body">
										<p><?php echo $contact->message; ?></p>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									  </div>
									</div><!-- /.modal-content -->
								  </div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
								
								
								<td><?php echo $contact->created_at; ?></td>
								<td align="center"><a href="#" data-id="<?php echo $contact->id; ?>" data-link="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/contact/delete_message" class="del_msg"><i class="icon-trash"></i></a></td>
							</tr>
							<?php
							}
							?>
				
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->