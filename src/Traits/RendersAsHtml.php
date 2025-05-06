<?php

namespace Wovosoft\LaravelDocumentGenerator\Traits;

trait RendersAsHtml
{
    public function toHtml()
    {
        return view('laravel-document-generator::renders-as-html', [
            'schema' => $this,
        ]);
    }
}
