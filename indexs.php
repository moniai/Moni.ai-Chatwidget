
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://moni.ai/widget/style.css">

<div class="jor-widget">
    <div class="container-widget">
            <div class="widget-container">
                <div class="panel panel-primary">
                    <div class="panel-heading" id="">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                        <div class="button-down pull-right">
                     		<a>
								<i class="fa fa-chevron-up "></i>
								<!-- Hidden element, should appear when the panel collapses -->
								<i class="fa fa-chevron-down hidden"></i>
								
                     		</a>
                        </div>
                    </div>
                    <div class="panel-collapse collapse" id="collapseOne" aria-expanded="true">
                        <div class="panel-body" id="msgbody">
				<!-- Typing bot -->
				

</div>
                        <div class="panel-footer clearfix">
                            <form method="post"  id="chat">
								<div class="form-group has-success has-feedback">
									<input type="text" class="form-control" id="m" name="message" placeholder="Type your message here..." aria-describedby="inputSuccess2Status">

									<button style="position: absolute;top: 0;right: 0; height: 40px; width: 40px; border: 0; background: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>

									<span id="inputSuccess2Status" class="sr-only">(success)</span>
								</div>
                            </form>
                            <div class="powered pull-right"><?php if (!(isset($_GET["branding"])&&$_GET["branding"]=="no")) { ?>powered by<a href="https://moni.ai" target="MoniAi"> Moni.ai</a><?php } ?></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
