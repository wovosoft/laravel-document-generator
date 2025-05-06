@php
    use Wovosoft\LaravelDocumentGenerator\Utils\PageSizeHelper;
@endphp

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$schema->getTitle()}}</title>
    <style>
        @media print {
            @page {
                size: {{$schema->getSize()}} {{$schema->getOrientation()}};
            }
        }

        .container {
            margin: auto;
            width: {{$schema->getWidth()}};
        }
    </style>
</head>
<body>

<div class="container">
    @foreach($schema->getChildren() as $child)
        @dump($child)
    @endforeach
</div>
</body>
</html>
