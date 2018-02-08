<?
/**
 * Template Name: zayavka-na-fasovku
 */
?>


<?get_header(); ?>
<div class="packing-application-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Order a packaging</p>
				<div class="separator"></div>
				<p class="choose">Tap the services you need in the list:</p>
			</div>
		</div>
		<form id="contact-order" action="" method="post">
			<div class="row">
				<div class="col-md-6 left">
					<input type="hidden" name="sub" value="Заявка на фасовку">
					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="operation" value="	Mechanized materials handling" checked> 	Mechanized materials handling
						    </label>
						</div>
					</div>

					<div class="form-block">
						<strong>Packaging in containers</strong>
						<table class="table">
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_one" value="Less than 5 kg" checked>Less than 5 kg</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_one" value="From 5 to 10 kg">From 5 to 10 kg</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_one" value="From 10 to 25 kg">From 10 to 25 kg</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_one" value="From 25 to 50 kg">From 25 to 50 kg</label>
									</div>
								</td>
							</tr>
						</table>
					</div>

					<div class="form-block">
						<strong>Packaging in valve bags by</strong>
						<table class="table">
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_two" value="10 kg" checked>10 kg</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_two" value="12 kg">12 kg</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_two" value="20 kg">20 kg</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_two" value="25 kg">25 kg</label>
									</div>
								</td>
							</tr>
						</table>
					</div>

					<div class="form-block">
						<strong>Automatic packing in plastic bags by</strong>
						<table class="table">
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_three" value="3 kg" checked>3 kg</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_three" value="5 kg">5 kg</label>
									</div>
								</td>
							</tr>
						</table>
					</div>

				</div>
				<div class="col-md-6 right">
					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="mixing" class="mixing">Mixing
						    </label>
						    <p class="number-text">Specify the number of components to be mixed:</p>
						</div>

							<div class="btn-group number">
								<button type="button" class="btn btn-default minus">-</button>
								<button type="button" class="btn btn-default"><input type="text" name="number" value="1"/></button>
								<button type="button" class="btn btn-default plus">+</button>
							</div>
					</div>

					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="laying_one" value="Packing the products on pallets with further shrink wrapping (1 pallet)" checked>Packing the products on pallets with further shrink wrapping (1 pallet)
						    </label>
						</div>
					</div>

					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="laying_two" value="	Packing pre-packed products in plastic big bag" checked>	Packing pre-packed products in plastic big bag
						    </label>
						</div>
					</div>

					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="storage" value="	Storage of packed products for more than 3 days 1 pallet/plastic big bag" checked> 	Storage of packed products for more than 3 days 1 pallet/plastic big bag
						    </label>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 v-packing">
					<strong>The total amount of packaging</strong>
					<div class="form-block">
						<div class="radio">
							<label><input type="radio" name="v_packing" value="up to 1 ton" checked>up to 1 ton</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="v_packing" value="from 1 to 19 tons">from 1 to 19 tons</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="v_packing" value="from 20 to 69 tons">from 20 to 69 tons</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="v_packing" value="from 70 to 138 tonnes">from 70 to 138 tonnes</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="v_packing" value="more than 138 tons">more than 138 tons</label>
						</div>
					</div>
				</div>
			</div>
			<div class="row dop">
				<div class="col-md-12">
					<strong>Tap the additional services in the list:</strong>
				</div>
				<div class="col-md-6">
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Purchase a pallet" checked> Purchase a pallet
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Purchase a plastic big bag"> Purchase a plastic big bag
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Packing combined pallet 1 item."> Packing combined pallet 1 item.
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Packing products in boxes"> Packing products in boxes
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value=" Product marking according to the customer requirements"> Product marking according to the customer requirements
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Finished products delivery to the customer's warehouse">Finished products delivery to the customer's warehouse
						</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value=" Reception/shipment of a railroad car"> Reception/shipment of a railroad car
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Railroad cars handling"> Railroad cars handling
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Consultation about the packaging"> Consultation about the packaging
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Engineering specifications development for finished product"> Engineering specifications development for finished product
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Package design"> Package design
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Finished product certificating"> Finished product certificating
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<strong>Contact Information</strong>
				</div>
			</div>
			<div class="row contact-info">
				<div class="col-md-6">
					<div class="form-group">
						<div class="form-group has-feedback">
							<input type="text" name="company_name" class="form-control" placeholder="Company name">
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
					<div class="form-group">
						<div class="form-group has-feedback">
							<input type="text" name="company_user" class="form-control" placeholder="Contact person">
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
					<div class="form-group">
						<div class="form-group has-feedback">
							<input type="text" name="company_phone" id="contact-phone" class="form-control" placeholder="Contact number">
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
					<div class="form-group">
						<div class="form-group has-feedback">
							<input type="email" name="company_email" class="form-control mail" placeholder="Email">
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="form-group has-feedback">
							<textarea name="company_message" class="form-control" placeholder="Note"></textarea>
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align: center;">
					<input type="submit" class="btn_submit-order disabled calculate-box-btn" value="Submit an order" style="border: none;" />
				</div>
			</div>
		</form>
	</div>
</div>
<? get_footer(); ?>