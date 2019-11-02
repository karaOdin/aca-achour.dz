
<p>Salut, c'est {{ $email['name'] }}</p>
@switch($email['topic'])
	@case($email['topic'] =="Service Commercial")
		<p>Service Commercial, {{ $email['message'] }}.</p>
		@break
	@case($email['topic'] =="Support Téchnique")
		<p>Support Téchnique, {{ $email['message'] }}.</p>
		@break
	@case($email['topic'] =="Autre")
		<p>{{ $email['message'] }}.</p>
		@break

	@default
		<p> {{ $email['message'] }}.</p>
@endswitch
<p>Tous les droits reservées ACA Achour ETS</p>