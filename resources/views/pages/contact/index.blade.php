<x-layouts.app title="{{$content->meta_title}}" description="{{$content->meta_description}}">


    {{-- <x-layouts.app-wrapper :home="$home" :rooms="$rooms"> --}}
    <x-layouts.app-wrapper>


        {{-- HEADER --}}
        <x-hero title="{{$content->header_heading}}" subtitle="Lorem ipsum dolor sit amet."
            bgi="{{asset('storage/' . $content->banner)}}" />

            <section class="py-20">
               
                <x-container class="max-w-screen-xl ">




                    
                  
                <!--CONTENT-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12  ">
        
                    {{-- <div class="order-1 lg:order-none">
                        <x-title>{{$home->title}}</x-title>
                        <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">
                    
                            <x-contact-box title="E-mail">
                                <a class="link-hover--dark text-xl font-light" href="mailto:{{$home->mail}}">{{$home->mail}}</a>
                            </x-contact-box>
                    
                            <x-contact-box title="{{__('global.contact.phone')}}">
                                <a class="link-hover--dark text-xl font-light mb-2" href="tel:+48 {{$home->phone}}">+48 {{$home->phone}}</a>
                                @if ($home->phone_second)
                                <a class="link-hover--dark text-xl font-light" href="tel:+48{{$home->phone_second}}">+48 {{$home->phone_second}}</a>
                                @endif
                                @if ($home->phone_third)
                                <a class="link-hover--dark text-xl font-light" href="tel:+48{{$home->phone_third}}">+48 {{$home->phone_third}}</a>
                                @endif
                            
                            </x-contact-box>
                    
                            <x-contact-box title="{{__('global.contact.address')}}">
                                <a class="link-hover--dark text-xl font-light" href="{{$home->map_link}}">{{$home->address}}<br>{{$home->city}}</a>
                            </x-contact-box>
                    
                            <x-contact-box title="Social Media">
                                <div class="flex justify-start  items-center gap-3">
                                @foreach ($home->socials as $social )
                           <x-socials :social="$social" dark />
                           @endforeach
                                </div>
        
                              
                            </x-contact-box>
                    
                        </div>
                        
                        
                    </div> --}}
        
                        <div class="order-1 lg:order-none">
                 
                        <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">
                    
                            <x-contact-box title="E-mail">
                                <a class="link-hover--dark text-xl font-light" href="mailto:">test@gmail.com</a>
                            </x-contact-box>
                    
                            <x-contact-box title="{{__('global.contact.phone')}}">
                                <a class="link-hover--dark text-xl font-light mb-2" href="tel:+48 ">+48 123 456 789</a>
                                
                             
                                
                                
                            
                            </x-contact-box>
                    
                            <x-contact-box title="{{__('global.contact.address')}}">
                                <a class="link-hover--dark text-xl font-light" href="">Testowa 123<br>34-400 Nowy Targ</a>
                            </x-contact-box>
                    
                            <x-contact-box title="Social Media">
                                <div class="flex justify-start  items-center gap-3">
                                {{-- @foreach ($home->socials as $social )
                           <x-socials :social="$social" dark />
                           @endforeach --}}
                                </div>
        
                              
                            </x-contact-box>
                    
                        </div>
                        
                        
                    </div>
        <div>
            <h3 class="mb-4 md:mb-10 uppercase font-medium font-heading text-2xl">Skontaktuj się z nami</h3>
            <livewire:contact-form/>
        </div>
                </div>
        </x-container>
        </section>


        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.4983991627955!2d-86.95354842297189!3d36.08133687246083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8864897acf45d0bb%3A0x1fb213d66ea5d40e!2sFord%20Ice%20Center%20Bellevue!5e0!3m2!1spl!2spl!4v1732089946996!5m2!1spl!2spl"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>

    </x-layouts.app-wrapper>
</x-layouts.app>