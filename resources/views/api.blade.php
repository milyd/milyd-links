@extends('layout')

@section('content')

<h4>API</h4>
<code>/api/getAllLinks</code> - Get all Links
<h5>Example response:</h5>
<pre>
<code>
[    
  {
    "id": 1,
    "slug": "devcrew",
    "url": "https://devcrew.com.pl",
    "clicks": 6,
    "description": "DevCrew - Grupa miłośników programowania",
    "languages": "PL",
    "created_at": "2022-08-25T21:14:31.000000Z",
    "updated_at": "2022-08-26T08:54:54.000000Z"
  },
  {
    "id": 2,
    "slug": "google",
    "url": "https://google.com",
    "clicks": 0,
    "description": "Google.com",
    "languages": "Various",
    "created_at": "2022-08-26T09:29:40.000000Z",
    "updated_at": "2022-08-26T09:29:40.000000Z"
  }
]
</code>
</pre>

<code>/api/getLink/{slug}</code> - Get specific link by slug
<h5>Example response (for <code>/api/getLink/google</code>):</h5>
<pre>
<code>
{
  "id": 2,
  "slug": "google",
  "url": "https://google.com",
  "clicks": 0,
  "description": "Google.com",
  "languages": "Various",
  "created_at": "2022-08-26T09:29:40.000000Z",
  "updated_at": "2022-08-26T09:29:40.000000Z"
}
</code>
</pre>

@endsection