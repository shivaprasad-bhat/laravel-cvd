@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="card-title">About the project</h1>
                        <p class="card-text text-justify">
                            It is a known fact that women provide excellent care to all members of their family but they often fail to take care of themselves. Women should feel that their health is important too and they need to be in good health while taking care of their families. Cardio vascular diseases(CVDs) can prove to be more than fatal to women. However, morbidity, as well as mortality due to the development of CVDs, are easily preventable in pre and peri-menopausal women, especially when they are young, if they are diagnosed early and treated. There is also an essential need for increased awareness regarding the disease, so they can be effectively managed through proper self-care and compliance to the treatment regimen. Sadly, information about disease prevention, self-care and disease management are not easily accessible. A team of academicians and students from Manipal Academy of Higher Education proposed a mobile technology-based intervention, a Cardio-vascular Diseases Care Program, for the Management of CVDs among pre-menopausal and peri-menopausal women. The study is funded by the Public Health Foundation of India (PFHI), a statutory body under the Department of Science and Technology. The project will explore the impact of the use of mobile phone-based app called “Suki Hrudaya” to track the frequency of monitoring and the treatment compliance of women with CVDs. The mobile app is available in the local language Kannada in addition to English. The app is simple, visual and interactive, and helps patients to self-monitor their symptoms, get periodic reminders for physician visits, follow treatment regimen prescribed by their physicians. Caregivers will use a set of technology-enabled methods to help the patients in the process of self-monitoring, increase awareness about CVDs, perform risk assessment, and provide information about self-care. Though there are many existing health apps available in the market, this mobile health app is customized, with the overall goal to enrich awareness, networking among the pre and peri-menopausal women with CVDs, living in the towns and villlages of Udupi distict. In addition, it would empower the women for self-care and to a certain extent, may also contribute to the identification of family members prone to developing CVDs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="align-middle">
                <div id="home-img-container" class="card img-fluid ml-5">
                <img class="card-img-top" src="{{asset('images/logo.png')}}" alt="Card image" id="home-img">
                <div class="card-img-overlay" id="home-img-overlay">
                    <h2 class="card-title"><u>Sukhi Hrudaya<br> ಸುಖಿ ಹೃದಯ</u></h2>
                    <p class="card-text">Cardio Vascular Care Project</p>
                </div>
            </div>
            </div>
        </div>
     </div>
</div>
@endsection