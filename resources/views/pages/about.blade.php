@extends('pages.master')

@section('aboutCon')

In this example, the sidebar section is utilizing the @parent directive to append (rather than overwriting) content to the layout's sidebar. The @parent directive will be replaced by the content of the layout when the view is rendered.

Blade views may be returned from routes using the global view helper:

@endsection