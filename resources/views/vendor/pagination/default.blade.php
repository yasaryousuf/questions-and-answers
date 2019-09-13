                  @if ($paginator->hasPages())
                  <ul class="pagination ">
                    @if ($paginator->onFirstPage())
                      <li>
                        <a aria-label="Previous" href="#"> <span aria-hidden="true">&lt;</span> </a>
                      </li>
                    @endif
                    @foreach ($elements as $element)
                      @if (is_string($element))
                      @endif
                      @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                              <li>
                                <a class="active" href="#">{{ $page }}</a>
                              </li>
                            @else
                              <li>
                                <a class="active" href="{{ $url }}">{{ $page }}</a>
                              </li>
                            @endif
                        @endforeach
                      @endif
                    @endforeach
                    @if ($paginator->hasMorePages())
                      <li>
                        <a aria-label="Next" href="#"> <span aria-hidden="true">&gt;</span> </a>
                      </li>
                    @endif
                  </ul>
                  @endif