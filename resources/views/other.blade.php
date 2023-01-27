
              <div class="d-flex align-items-center ml-12" data-userId="{{auth()->id()}}" data-articleId="{{$course->id}}">
                <a href="#" id="disliked" data-userId="{{auth()->id()}}" data-articleId="{{$course->id}}">
                    <i class="fa fa-thumbs-down {{auth()->check() && $course->isDisLikedBy(auth()->user()) ? 'text-blue' : 'text-gray'}}"></i>
                  </a>
                  <span class="ml-2">{{$course->likes()->where('liked' , 0)->count() ?: '0'}}</span>
              </div>