<?php

  namespace App\Transformers;

  use App\News;
  use League\Fractal\TransformerAbstract;

  class NewsTransformers extends TransformerAbstract
  {
    public function transform(News $news)
    {
      return [
        'id'              => $news->id,
        'title'           => $news->title,
        'description'     => $news->description,
        'image'           => $news->image,
        'date'            => $news->created_at->diffForHumans(),
      ];
    }
  }
