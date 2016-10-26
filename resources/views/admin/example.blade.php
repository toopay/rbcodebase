@extends('includes.layouts.master')

@section('content')
	<div class="page-on-top">
		<div class="row m-b-40">
			<div class="col-xs-12 col-sm-6 col-xl-3">
				<div class="text-widget-1 color-white">
					<div class="row flex-items-xs-middle bg-blue-900">
						<div class="col-xs-4 bg-blue-700">
							<i class="fa fa-usd fa-2x"></i>
						</div>
						<div class="col-xs-8">
							<div class="title">Online revenue</div>
							<div class="subtitle counter-1"><span>$</span>0</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-xl-3">
				<div class="text-widget-1 color-white">
					<div class="row flex-items-xs-middle bg-blue-900">
						<div class="col-xs-4 bg-blue-700">
							<i class="fa fa-bullseye fa-2x"></i>
						</div>
						<div class="col-xs-8">
							<div class="title">New customers</div>
							<div class="subtitle counter-2">0</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-xl-3">
				<div class="text-widget-1 color-white">
					<div class="row flex-items-xs-middle bg-blue-900">
						<div class="col-xs-4 bg-blue-700">
							<i class="fa fa-code fa-2x"></i>
						</div>
						<div class="col-xs-8">
							<div class="title">Active projects</div>
							<div class="subtitle counter-3">0</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-xl-3">
				<div class="text-widget-1 color-white">
					<div class="row flex-items-xs-middle bg-blue-900">
						<div class="col-xs-4 bg-blue-700">
							<i class="fa fa-bullhorn fa-2x"></i>
						</div>
						<div class="col-xs-8">
							<div class="title">Referrals</div>
							<div class="subtitle counter-4">0</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row counters">
			<div class="col-xs-12 col-xl-6">
				<div class="charts">
					<div class="row m-b-20">
						<div class="col-xs-12 col-md-6">
							<h3><span>$</span><span class="counter-5">0</span></h3>
							<p class="color-grey-700 text-sm m-b-10">Online sales</p>
							<span class="small-bar-1 color-white">7,9,2,2,4,2,7,6,8,4,7,2,4,5,3,2,2,2,9,5,10,9,5,6,7,9,6,2,5,6,5,10,5,5,10,7,5,7,3,3</span>
						</div>
						<div class="col-xs-12 col-md-6">
							<h3><span class="counter-6">0</span></h3>
							<p class="color-grey-700 text-sm m-b-10">Active customers</p>
							<span class="small-bar-2 color-white">9,8,3,3,3,4,4,3,5,3,7,4,10,10,9,7,9,4,8,3,8,2,3,2,6,3,8,9,8,9,10,7,7,3,9,8,6,2,9,9</span>
						</div>
					</div>
					<div class="row m-b-20">
						<div class="col-xs-12 col-md-6">
							<h3><span>$</span><span class="counter-7">0</span></h3>
							<p class="color-grey-700 text-sm m-b-10">Project revenue</p>
							<span class="small-bar-3 color-white">3,5,2,3,5,9,8,3,3,6,5,9,6,7,10,10,9,8,9,6,6,9,3,2,10,10,8,5,2,6,3,3,10,4,5,4,2,3,6,4</span>
						</div>
						<div class="col-xs-12 col-md-6">
							<h3><span class="counter-8">0</span></h3>
							<p class="color-grey-700 text-sm m-b-10">Active users</p>
							<span class="small-bar-4 color-white">7,9,3,2,5,2,2,3,8,9,8,4,8,10,4,7,9,2,2,9,7,3,2,6,6,5,9,7,6,4,9,2,3,10,3,6,2,3,8,8</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-xl-3">
				<div class="widget">
					<div class="row m-b-20">
						<div class="col-xs-12">
							<p class="color-grey-900 m-b-5">Task status</p>
							<p class="color-grey-700 text-sm m-b-10">3 done, 4 remaining</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="activity-widget-6">
								<div class="row">
									<div class="col-xs-12">
										<p>Product development</p>
										<p class="f-w-300 m-b-10">Today</p>
										<progress class="progress-sm progress progress-warning" value="33" max="100">33%</progress>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<p>Github project</p>
										<p class="f-w-300 m-b-10">This week</p>
										<progress class="progress-sm progress progress-danger" value="60" max="100">60%</progress>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-xl-3">
				<div class="row m-b-20">
					<div class="col-xs-6 col-md-4">
						<div class="p-t-10">
							<div class="easy-pie-chart-xs easy-pie-chart">
								<div class="chart easy-pie-chart-primary-1" data-percent="24"></div>
								<span class="icon">
								<i class="fa fa-trophy color-primary"></i>
							</span>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-8">
						<div class="p-t-30 p-l-20">
							<p class="color-grey-700 text-sm m-b-10">New clients</p>
							<p>234</p>
						</div>
					</div>
				</div>
				<div class="row m-b-20">
					<div class="col-xs-6 col-md-4">
						<div class="p-t-10">
							<div class="easy-pie-chart-xs easy-pie-chart">
								<div class="chart easy-pie-chart-primary-1" data-percent="50"></div>
								<span class="icon">
								<i class="fa fa-bolt color-primary"></i>
							</span>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-8">
						<div class="p-t-30 p-l-20">
							<p class="color-grey-700 text-sm m-b-10">New projects</p>
							<p>36</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-b-40">
			<div class="col-xs-12">
				<div class="widget">
					<div class="row m-b-20">
						<div class="col-xs-12">
							<p class="color-grey-900 m-b-5">Bar chart</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div id="nvd3-bar">
								<svg style="height:320px;width:100%"></svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-b-40">
			<div class="col-xs-12 col-xl-8">
				<div class="widget">
					<div class="row m-b-20">
						<div class="col-xs-12">
							<div class="pull-right">
								<button class="btn btn-outline-primary btn-raised btn-rounded btn-sm">
									Follow
								</button>
								<button class="btn btn-outline-secondary btn-raised btn-rounded btn-sm">
									Message
								</button>
							</div>
							<p class="color-grey-900 m-b-5">Browser stats</p>
							<p class="color-grey-700 text-sm m-b-10">Latest trends</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
									<tr>
										<th>
											<div class="checkbox checkbox-primary">
												<label>
													<input type="checkbox" data-checked="false" id="checkbox-1">
												</label>
											</div>
										</th>
										<th>Icon</th>
										<th>Name</th>
										<th>Visits</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>
											<div class="checkbox checkbox-primary">
												<label>
													<input type="checkbox">
												</label>
											</div>
										</td>
										<td>
											<i class="fa fa-chrome"></i>
										</td>
										<td>
											Google Chrome </td>
										<td>
											435 </td>
									</tr>
									<tr>
										<td>
											<div class="checkbox checkbox-primary">
												<label>
													<input type="checkbox">
												</label>
											</div>
										</td>
										<td>
											<i class="fa fa-firefox"></i>
										</td>
										<td>
											Firefox </td>
										<td>
											223 </td>
									</tr>
									<tr>
										<td>
											<div class="checkbox checkbox-primary">
												<label>
													<input type="checkbox">
												</label>
											</div>
										</td>
										<td>
											<i class="fa fa-internet-explorer"></i>
										</td>
										<td>
											Internet Explorer 11 </td>
										<td>
											235 </td>
									</tr>
									<tr>
										<td>
											<div class="checkbox checkbox-primary">
												<label>
													<input type="checkbox">
												</label>
											</div>
										</td>
										<td>
											<i class="fa fa-safari"></i>
										</td>
										<td>
											Safari </td>
										<td>
											150 </td>
									</tr>
									<tr>
										<td>
											<div class="checkbox checkbox-primary">
												<label>
													<input type="checkbox">
												</label>
											</div>
										</td>
										<td>
											<i class="fa fa-internet-explorer"></i>
										</td>
										<td>
											Internet Explorer 10 </td>
										<td>
											88 </td>
									</tr>
									<tr>
										<td>
											<div class="checkbox checkbox-primary">
												<label>
													<input type="checkbox">
												</label>
											</div>
										</td>
										<td>
											<i class="fa fa-internet-explorer"></i>
										</td>
										<td>
											Internet Explorer 9 </td>
										<td>
											35 </td>
									</tr>
									<tr>
										<td>
											<div class="checkbox checkbox-primary">
												<label>
													<input type="checkbox">
												</label>
											</div>
										</td>
										<td>
											<i class="fa fa-opera"></i>
										</td>
										<td>
											Opera </td>
										<td>
											20 </td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-xl-4">
				<div class="widget">
					<div class="row m-b-20">
						<div class="col-xs-12">
							<div class="dropdown pull-right">
								<button type="button" class="btn btn-raised btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Filter
								</button>
								<div class="dropdown-menu dropdown-menu-right from-right">
									<a class="dropdown-item">This week</a>
									<a class="dropdown-item">This month</a>
									<a class="dropdown-item">This year</a>
									<a class="dropdown-item">Today</a>
								</div>
							</div>
							<p class="color-grey-900 m-b-5">Online friends</p>
							<p class="color-grey-700 text-sm m-b-10">Lorem ipsum</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="user-widget-2">
								<ul class="list-group">
									<li class="list-group-item">
										<div class="badge badge-50">
											<span class="tag tag-raised tag-rounded tag-primary">5</span>
											<img src="../../../../assets/faces/m1.png" class="max-w-50 img-circle" alt="badge" />
										</div>
										<div class="bmd-list-group-col">
											<p class="list-group-item-heading">Lucas smith</p>
											<p class="list-group-item-text color-primary">Apple, Inc.</p>
											<p class="list-group-item-text">Vital Database Dude</p>
										</div>
										<i class="pull-xs-right fa fa-dot-circle-o icon color-primary"></i>
									</li>
									<li class="list-group-item">
										<div class="badge badge-50">
											<span class="tag tag-raised tag-rounded tag-info">3</span>
											<img src="../../../../assets/faces/w1.png" class="max-w-50 img-circle" alt="badge" />
										</div>
										<div class="bmd-list-group-col">
											<p class="list-group-item-heading">Janet Abshire</p>
											<p class="list-group-item-text color-primary">Pinterest</p>
											<p class="list-group-item-text">Lead Innovation Officer</p>
										</div>
										<i class="pull-xs-right fa fa-dot-circle-o icon color-info"></i>
									</li>
									<li class="list-group-item">
										<div class="badge badge-50">
											<span class="tag tag-raised tag-rounded tag-info">3</span>
											<img src="../../../../assets/faces/m2.png" class="max-w-50 img-circle" alt="badge" />
										</div>
										<div class="bmd-list-group-col">
											<p class="list-group-item-heading">Lucas Koch</p>
											<p class="list-group-item-text color-primary">Reddit</p>
											<p class="list-group-item-text">Incomparable UX Editor</p>
										</div>
										<i class="pull-xs-right fa fa-dot-circle-o icon color-info"></i>
									</li>
									<li class="list-group-item">
										<div class="badge badge-50">
											<span class="tag tag-raised tag-rounded tag-info">4</span>
											<img src="../../../../assets/faces/w2.png" class="max-w-50 img-circle" alt="badge" />
										</div>
										<div class="bmd-list-group-col">
											<p class="list-group-item-heading">Gladys Schuster</p>
											<p class="list-group-item-text color-primary">Coursera</p>
											<p class="list-group-item-text">Primary Product Pioneer</p>
										</div>
										<i class="pull-xs-right fa fa-dot-circle-o icon color-info"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
