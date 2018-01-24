@extends('layouts.app')

@section('content')
<!-- 主体 -->
<div class="about-section">
	<div class="about hr">
		<div class="hr-t"></div>
		<div class="hr-group">
		@if (!empty($hr))
			@if (isset($hr[0]))
			<div class="advertise rcln">
				<a href="{{ $hr[0]->url }}">
					<div class="advertise-text">
						<span>人才理念</span>
						<span class="red">HUMAN  RESOURCE  VALUES</span>
						<p class="white">以人为本，实施人才战略。企业成功与否，与人才资本是否实现有效利用息息相关。安徽艺朝艺夕教育咨询有限公司秉承着以人为本的理念，尊重人的价值、发掘人的潜能、以实现人企共同发展。</p>
					</div>
				</a>
			</div>
			@endif
			@if (isset($hr[1]))
			<div class="advertise shzp">
				<a href="{{ $hr[1]->url }}">
					<div class="advertise-text">
						<span>社会招聘</span>
						<span>SOCIAL RECRUITMENT</span>
						<p>安徽艺朝艺夕教育咨询有限公司重视人才的发展，多渠道引进人才，高效培养，为每一位员工提供公平的晋升和发展渠道，注重团队协作和价值提升，成就每一位员工的职业生涯。</p>
					</div>
				</a>
			</div>				
			@endif
			@if (isset($hr[2]))
			<div class="advertise xyzp">
				<a href="{{ $hr[2]->url }}">
					<div class="advertise-text">
						<span>校园招聘</span>
						<span>CAMUSE RECRUITMENT</span>
						<p>安徽艺朝艺夕教育咨询有限公司为应届高校毕业生提供专业和全方位的人才发展机制、优厚的薪酬福利待遇。在这里，你将获得专业的培训、公平的竞争渠道、价值的提升，在这里，不断成长！
						</p>
					</div>
				</a>
			</div>				
			@endif
			@endif
		</div>
	</div>
</div>
<div style="clear: both;"></div>
@endsection
