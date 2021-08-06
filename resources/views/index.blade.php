@extends('layouts.front')

@section('title') Speisekarte @endsection

@section('content')
    <section class="oeffnungszeiten">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 my-lg-4 my-3">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <h4>Öffnungszeiten</h4>
                            <div class="table-responsive-xxl">
                                <table class="table table-sm table-borderless lh-1">
                                    <thead>
                                    <tr>
                                        <th class="align-items-center" colspan="2" style="min-width: 300px;">Sommer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Montag</td>
                                        <td class="align-items-center" style="min-width: 138px;">Ruhetag</td>
                                    </tr>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Dienstag - Freitag</td>
                                        <td class="align-items-center" style="min-width: 138px;">11:00 - 21:00 Uhr</td>
                                    </tr>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Sonntag & Feiertage</td>
                                        <td class="align-items-center" style="min-width: 138px;">15:00 - 21:00 Uhr</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-sm table-borderless lh-1">
                                    <thead>
                                    <tr>
                                        <th class="align-items-center" colspan="2" style="min-width: 300px;">Winter</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Montag</td>
                                        <td class="align-items-center" style="min-width: 138px;">Ruhetag</td>
                                    </tr>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Dienstag - Freitag</td>
                                        <td class="align-items-center" style="min-width: 138px;">11:00 - 20:30 Uhr</td>
                                    </tr>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Sonntag & Feiertage</td>
                                        <td class="align-items-center" style="min-width: 138px;">15:00 - 21:00 Uhr</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><div class="col-lg-6 col-md-12 col-12 my-lg-4 my-3">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <h4>Lieferzeiten</h4>
                                <strong class="text-danger">Bestellannahme bis 20:00 Uhr</strong>
                            </div>
                            <div class="table-responsive-xxl">
                                <table class="table table-sm table-borderless lh-1">
                                    <thead>
                                    <tr>
                                        <th class="align-items-center" colspan="2" style="min-width: 300px;">Mittags</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Montag</td>
                                        <td class="align-items-center" style="min-width: 138px;">Ruhetag</td>
                                    </tr>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Dienstag - Samstag</td>
                                        <td class="align-items-center" style="min-width: 138px;">11:00 - 13:30 Uhr</td>
                                    </tr>
                                    <tbody>
                                </table>
                                <table class="table table-sm table-borderless lh-1">
                                    <thead>
                                    <tr>
                                        <th class="align-items-center" colspan="2" style="min-width: 300px;">Abends</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Montag</td>
                                        <td class="align-items-center" style="min-width: 138px;">Ruhetag</td>
                                    </tr>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Dienstag - Samstag</td>
                                        <td class="align-items-center" style="min-width: 138px;">17:00 - 20:30 Uhr</td>
                                    </tr>
                                    <tr>
                                        <td class="align-items-center" style="min-width: 162px;">Sonntag & Feiertage</td>
                                        <td class="align-items-center" style="min-width: 138px;">17:00 - 20:30 Uhr</td>
                                    </tr>
                                    <tbody>
                                </table>
                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-sm-between justify-content-start">
                                <p class="m-0"><strong>Lieferung:&nbsp; </strong></p>
                                <p class="m-0"> innerorts ab 10,00 €&nbsp; </p>
                                <p class="m-0"> außerorts ab 15,00 € </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="speisekarte">
        <div class="container">
            <div class="row justify-content-center my-3 py-3">
                <div class="col-lg-7 heading-section text-center">
                    <h2 class="mb-4">Speisekarte</h2>
                    <a class="btn btn-secondary" href="{{ asset('docs/Speisekarte_Buttstaedter_Bistro.pdf') }}" target="_blank" download>Speiskarte <i class="fa fa-file-download"></i> als <i class="far fa-file-pdf"></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Drehspieß Kebab aus Putenfleisch</h4>
                        @if (\Carbon\Carbon::parse(now())->isDayOfWeek(2))
                            <p>Angebotstag Dienstags = Drehspießtag -0,50 €</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>01. Drehspieß</span></h3>
                                <span class="price">4,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Fladenbrot, Drehspießfleisch, Rot- und Weißkraut, Eisbersalat, Zwiebeln, Gurken, Tomate, Soße</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>02. Drehspieß mit Weißkäse</span></h3>
                                <span class="price">4,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Fladenbrot, Drehspießfleisch, Rot- und Weißkraut, Eisbersalat, Zwiebeln, Gurken, Tomate, Soße, Weißkäse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>03. Kinder Drehspieß</span></h3>
                                <span class="price">3,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Fladenbrot, Drehspießfleisch, Rot- und Weißkraut, Eisbersalat, Zwiebeln, Gurken, Tomate, Soße</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>04. Drehspieß Spezial</span></h3>
                                <span class="price">5,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Fladenbrot, Drehspießfleisch, Rot- und Weißkraut, Eisbersalat, Zwiebeln, Gurken, Tomate, Soße</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>05. Drehspieß Hawaii</span></h3>
                                <span class="price">4,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Fladenbrot, Drehspießfleisch, Rot- und Weißkraut, Eisbersalat, Zwiebeln, Gurken, Tomate, Soße, Ananas</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>06. Dürüm Drehspieß (Rolo Döner)</span></h3>
                                <span class="price">5,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>07. Fladenbrot Vegetarisch</span></h3>
                                <span class="price">3,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Fladenbrot, Drehspießfleisch, Rot- und Weißkraut, Eisbersalat, Zwiebeln, Gurken, Tomate, Soße</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>08. Fladenbrot Vegetarisch mit Weißkäse</span></h3>
                                <span class="price">3,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Fladenbrot, Drehspießfleisch, Rot- und Weißkraut, Eisbersalat, Zwiebeln, Gurken, Tomate, Soße, Weißkäse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>09. Falafel</span></h3>
                                <span class="price">3,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Fladenbrot und Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>10. Falafel oder Halloumi Rolle</span></h3>
                                <span class="price">5,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Weißkraut, Eisbersalat, Zwiebeln, Gurken, Tomate, Soße</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>11. Halloumi</span></h3>
                                <span class="price">3,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Fladenbrot und Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>12. Drehspießfleisch Schale</span></h3>
                                <span class="price">7,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Fladenbrot und Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>13. Drehspießteller</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Nudeln, Pommes und Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>14. Kiddy Box</span></h3>
                                <span class="price">5,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit 6 Nuggets, Pommes, Capri Sonne + 1 Überraschung</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex">
                        <h4>Kurdische Spezialitäten</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>20. Pom Drehspieß</span></h3>
                                <span class="price">4,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pommes, Drehspießfleisch und Soße</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>21. Lahmacun mit Drehspießfleisch oder Weißkäse</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Lahmacunmischung, Drehspießfleisch, Salat, Soße, Weißkäse</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex">
                        <h4>Kurdische Pide</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>25. Pide mit Käse</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pidemischung, Käse, Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>26. Pide mit Ei</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pidemischung, Ei, Käse, Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>27. Pide mit Weiß- oder Edamerkäse und Ei</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>28. Pide mit Drehspießfleisch und Weiß- oder Edamerkäse und Ei</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pidemischung, Ei, Käse, Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Steinofenpizza</h4>
                        <p class="mb-0 align-items-center">(alle Pizzen mit Pizzasoße und Käse) Auf Wunsch auch mit Sauce Hollandaise</p>
                        <p class="mb-0 align-items-center text-end">groß &#8709; 28cm</p>
                        @if(\Carbon\Carbon::parse(now())->isDayOfWeek(3))
                            <p>Angebotstag Mittwochs = Pizzatag -0,50 €</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>30. Pizza Calzone</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Salami, Schinken, Paprika, Zwiebeln</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>31. Pizza Calzone Drehspieß</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Drehspießfleisch, Zwiebeln</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>32. Pizza Salami</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Salami</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>33. Pizza Schinken</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Schinken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>34. Pizza Hawaii</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Ananas, Schinken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>35. Pizza Mescolare</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Salami, Schinken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>36. Pizza Calzone Drehspieß</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Thunfisch, Zwiebeln</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>37. Pizza Chicken Hawaii</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Hähnchenbrust, Hollandaisesauce, Ananas</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>38. Pizza Drehspieß Hollandaise</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Drehspießfleisch, Zwiebeln, Sauce Hollandaise</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>39. Pizza Drehspieß</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Drehspießfleisch, Zwiebeln, Tomatensauce</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>40. Pizza Salami-Pilze</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Salami, Pilze</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>41. Pizza Prosciutto Funghi</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Schinken, Pilze</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>42. Pizza Castro</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Salami, Schinken, Peperoni, Zwiebeln</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>43. Pizza Capricciosa</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Salami, Schinken, Pilze, Paprika</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>44. Pizza Sole Mio</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Salami, Schinken, Pilze, Ei</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>45. Pizza Boss</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Fleischsoße, Salami, Schinken, Ei</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>45. Pizza Boss</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Fleischsoße, Salami, Schinken, Ei</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>46. Pizza Toscana</span></h3>
                                <span class="price">7,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Salami, Schinken, Pilze, Zwiebeln, Knoblauchwurst</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>47. Pizza Broccoli-Schinken</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Broccoli, Schinken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>48. Pizza Antalya</span></h3>
                                <span class="price">7,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Drehspießfleisch, Broccoli, Peperoni, Knoblauch (auch scharf)</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>49. Pizza Italia</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Pilze, Peperoni, Thunfisch, Zwiebeln</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>50. Pizza Mama Mia</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Salami, Schinken, Thunfisch, Zwiebeln</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>51. Pizza Sucuk</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Sucuk (kurdische Peperoniwurst), Oliven, Peperoni</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>52. Pizza Romana</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Tomatensoße, Salami, Schinken, Peperoni, Zwiebeln, Käse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>53. Drehspießpizza Hawaii</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Tomatensoße, Drehspießfleisch, Zwiebeln, Ananas, Käse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>54. Pizza Fantasia</span></h3>
                                <span class="price">8,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Tomatensoße, Hähnchenstreifen, Broccoli, Pilze, Käse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>55. Pizza Costa</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Tomatensoße, Schinken, Salami, Paprika, Brocoli, Käse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>56. Pizza Betan</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Tomatensoße, Meeresfrüchte, Zwiebeln, Käse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>57. Pizza Kraben</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Tomatensoße, Krabben, Zwiebeln, Käse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>58. Pizza Hähnchen Hollandaise</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Hähnchenstreifen, Ananas, Käse, Sauce Hollandaise</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>59. Quattro Calzone</span></h3>
                                <span class="price">7,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Tomatensoße, Salami, Schinken, Thunfisch, Pilze, Käse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>60. Familienpizza &#8709; 40cm</span></h3>
                                <span class="price">16,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>4 Beilagen nach Wahl</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Vegetarische Pizza</h4>
                        <p class="mb-0 align-items-center">&nbsp;</p>
                        <p class="mb-0 align-items-center text-end">groß &#8709; 28cm</p>
                        @if(\Carbon\Carbon::parse(now())->isDayOfWeek(3))
                            <p>Angebotstag Mittwochs = Pizzatag -0,50 €</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>61. Pizza Margherita</span></h3>
                                <span class="price">5,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Mozzarella</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>62. Pizza Funghi</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Pilze</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>63. Pizza Vegetarisch</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Tomaten, Pilze, Mais, Broccoli, Spinat</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>64. Pizza Peperoni</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Pilze, Peperoni</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>65. Pizza Broccoli</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Broccoli</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>66. Pizza Mozarella</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Mozzarella, Tomaten</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>67. Pizza Spinat</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Spinat</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>68. Pizza Verduna</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Käse, Pilze, Broccoli, Mais</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>69. Hausmarke</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Tomatensoße, Paprika, Pilze, Ananas, Zwiebeln, Käse</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Nudelgerichte</h4>
                        <p class="mb-0 align-items-center text-end">(Rigatoni) alle Nudeln auch mit Käse überbacken</p>
                        @if(\Carbon\Carbon::parse(now())->isDayOfWeek(5))
                            <p>Angebotstag Freitags = Nudeltag -0,50 €</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>70. Nudeln Napoli Forno</span></h3>
                                <span class="price">5,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Nudeln, Tomatensoße, mit Käse überbacken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>71. Nudeln Bolognese Forno</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Nudeln, Fleischsoße, mit Käse überbacken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>72. Nudeln Schinken Sahne Forno</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Nudeln, Sahnesoße mit Schinken und Käse überbacken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>73. Nudeln Con Panna Forno</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Nudeln, Sahnesoße mit Schinken, Pilze, Broccolie, mit Käse überbacken</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>74. Nudeln Buttstädt</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Nudeln, Drehspießfleisch, Tomaten- oder Sahnesoße, mit Käse überbacken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>75. Nudeln Fantasia</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Nudeln, Hähnchenbrust, Broccoli, Pilze</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>75. Nudeln Rose</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Nudeln, Drehspießfleisch, Broccoli</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Schnitzel</h4>
                        <p class="mb-0 align-items-center text-end">(mit Ketchup oder Mayo)</p>
                        @if(\Carbon\Carbon::parse(now())->isDayOfWeek(4))
                            <p>Angebotstag Donnerstags = Schnitzeltag -0,50 €</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>80. Schnitzel</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pommes und Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>81. Schnitzel</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pommes, Zwiebeln, Champingons und Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>82. Rahmschnitzel</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pommes, Salat, Rahmsoße und Pilze</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>83. Zigeunerschnitzel</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pommes, Salat und Paprikasoße</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>84. Jägerschnitzel</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pommes, Salat und Jägersoße</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>85. Drehspießschnitzel</span></h3>
                                <span class="price">8,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Pommes, Drehspießfleisch, Sahnesoße und Salat</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>86. Schnitzel Hawaii</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Sahnesoße, Schinken, Ananas, mit Käse überbacken, Pommes, Salat</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Salate</h4>
                        <p class="mb-0 align-items-center text-end">(alle Salate mit Dressing)</p>
                        @if(\Carbon\Carbon::parse(now())->isDayOfWeek(6))
                            <p>Angebotstag Samstags = Salattag -0,50 €</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>90. Gemischter Salat</span></h3>
                                <span class="price">5,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Eisbergsalat, Rot- und Weißkraut, Tomaten, Gurken, Mais, Zwiebeln</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>91. Gemischter Salat mit Weißkäse</span></h3>
                                <span class="price">5,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Eisbergsalat, Rot- und Weißkraut, Tomaten, Gurken, Mais, Zwiebeln, Weißkäse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>92. Salat Spezial</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Drehspießfleisch, Eisbergsalat, Rot- und Weißkraut, Tomaten, Gurken, Mais, Zwiebeln</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>93. Italienischer Salat Spezial</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Eisbergsalat, Rot- und Weißkraut, Tomaten, Gurken, Mais, Zwiebeln, Schinken, Ei</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>94. Hirtensalat</span></h3>
                                <span class="price">6,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Eisbergsalat, Tomaten, Gurken, Zwiebeln, Weißkäse</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>95. Salat Hawaii</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Eisbergsalat, Tomaten, Gurken, Ananas, Schinken</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>96. Thunfischsalat</span></h3>
                                <span class="price">6,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>Eisbergsalat, Rot- und Weißkraut, Tomaten, Gurken, Mais, Zwiebeln, Thunfisch</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Snacks und Aufläufe</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>100. Pommes Frites</span></h3>
                                <span class="price">2,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Ketchup oder Mayo</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>101. Hamburger</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Menü mit Pommes und Cola</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>102. Chickenburger</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Menü mit Pommes und Cola</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>103. Bratkartoffeln</span></h3>
                                <span class="price">7,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Käse überbacken, mir Broccoli, Pilzen und Sahnesoße</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>104. Bratkartoffeln + Schinken</span></h3>
                                <span class="price">8,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Käse überbacken, mir Broccoli, Pilzen und Sahnesoße</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>105. Bratkartoffeln + Drehspießfleisch</span></h3>
                                <span class="price">8,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Käse überbacken, mit Broccoli, Pilzen und Sahnesoße</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>106. Drehspießauflauf</span></h3>
                                <span class="price">8,50 €</span>
                            </div>
                            <div class="d-block">
                                <p>mit Käse überbacken, mit Tomaten- und Sahnesoße</p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>108. Chicken Nuggets Teller</span></h3>
                                <span class="price">7,00 €</span>
                            </div>
                            <div class="d-block">
                                <p>Pommes, Salatbeilage</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Burger</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>110. Großer Cheesburger</span></h3>
                                <span class="price">4,00 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>111. Großer Chickenburger</span></h3>
                                <span class="price">3,50 €</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>112. Großer Hamburger</span></h3>
                                <span class="price">3,50 €</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Kalte Getränke</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Cola, Fanta, Sprite, Spezi, Bier 0.33l</span></h3>
                                <span class="price">1,50 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Wasser</span></h3>
                                <span class="price">1,00 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Wein (Rot oder Weiß)</span></h3>
                                <span class="price">4,50 €</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Jägermeister</span></h3>
                                <span class="price">4,50 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Kümmerling</span></h3>
                                <span class="price">1,50 €</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="categorie d-flex flex-wrap justify-content-between">
                        <h4>Extras</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Drehspießfleisch, Thunfisch, Käse</span></h3>
                                <span class="price">0,50 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Salami, Schinken</span></h3>
                                <span class="price">0,50 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Paprika, Pilze, Peperoni</span></h3>
                                <span class="price">0,50 €</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Soße im Becher</span></h3>
                                <span class="price">0,50 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Fladenbrot mit Soße</span></h3>
                                <span class="price">1,50 €</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex">
                        <div class="desc">
                            <div class="d-flex text align-items-center">
                                <h3><span>Fladenbrot</span></h3>
                                <span class="price">1,00 €</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="reference">
                        <p>Alle Speisen auch zum mitnehmen.</p>
                        <p>Telefonische Bestellung und Selbstabholung jederzeit möglich.</p>
                        <p>Alle Gerichte werden stets frisch zubereitet!</p>
                        <p>Wir backen unser Brot selbst!</p>
                    </div>
                </div>
            </div>

            {{--<div class="row">
                <div class="col-lg-12 col-12 my-3">

                    <div class="card shadow-lg">
                        <div class="card-header bg-success text-light">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4>Buttstädter Bistro Speisekarte</h4>
                                <a href="{{ asset('docs/Speisekarte_Buttstaedter_Bistro.pdf') }}" class="btn btn-secondary shadow-lg" target="_blank" download>Speiskarte <i class="fa fa-file-download"></i> als <i class="far fa-file-pdf"></i> </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    123
                                </div>
                                <div class="col-lg-6">
                                    123
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>--}}
        </div>
    </section>

    <section class="maps shadow-lg">
        <iframe style="width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d791.6116453749792!2d11.417627655358693!3d51.122544930315485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a4194221f7810d%3A0xd1bfbb2fa0941b21!2sButtst%C3%A4dter%20Imbiss!5e1!3m2!1sde!2sde!4v1628160358774!5m2!1sde!2sde" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
@endsection