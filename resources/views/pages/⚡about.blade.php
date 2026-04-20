<?php


use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="pb-30"">
    <div class="flex justify-center items-center pt-10">
        <div class="rounded-full overflow-hidden w-50 h-50 pr-10 pb-20">
            <img src="{{ asset('storage/face.png') }}" class="object-cover w-full h-full scale-350 ">
        </div>
    </div>
    <div class="flex justify-center">
        <div class=" grid grid-cols-1 relative w-full md:grid-cols-3 md:w-2/3 mt-5 justify-center items-center">
            <div class="col-span-full md:col-span-1 self-start text-5xl font-extrabold item pt-0 pr-10 text-center md:text-right items-start">
                    ABOUT ME
                    <p class="italic font-semibold text-base"> Curious about Words, <br> Obsessed with Code.</p>
            </div>
            <div class="col-span-full md:col-span-2 text-lg text-justify p-10 md:p-0">

                    <p>
                        Hi there! My name is Masykur Majid. I’m a Teacher who teach English but somewhat also teach my student the language of programming.
                    </p>
                    <br>
                    <p>
                        <b>Where it all starter?</b> Well,my foundation is actually in technology. I spent my vocational high school (SMK) years learning about Software Engineering (Rekayasa Perangkat Lunak). However, life led me toward a different passion and Language. From Programming language to English and from Programmer to Educator. So, I decided to become an English teacher, focusing on helping others find their voice in a global language.
                    </p>
                    <br>
                    <p>
                    The plot twist happened at the school where I teach at this moment. I was asked to step in and help the Software Engineering students discover the excitement of the programming world. Stepping back into the world of logic, syntax, and problem-solving felt like coming home. I fell in love with programming all over again, realizing that coding is just another form of language—one that builds worlds instead of just describing them.<br><br>
                    This experience transformed my path. Today, I am proud to serve as both an English and Software Engineering teacher.
                    </p>
            </div>
        </div>
    </div>
</div>
