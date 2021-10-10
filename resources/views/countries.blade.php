@extends('layout.app')
@section('content')
<div class="card">
    <div class="card-body">

        <div class="table-responsive" id="users-table-wrapper">
            <table class="table table-borderless table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th class="min-width-100">{{ __('text.title.country') }}</th>
                        <th class="min-width-100">{{ __('text.title.spoofing') }}</th>
                        <th class="min-width-100">Unicode</th>
                        <th class="min-width-120">{{ __('text.title.note') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/al/flat/64.png"
                                alt="Albania flag">
                        </td>
                        <td class="align-middle">
                            Albania
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ao/flat/64.png"
                                alt="Angola flag">
                        </td>
                        <td class="align-middle">
                            Angola
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/am/flat/64.png"
                                alt="Armenia flag">
                        </td>
                        <td class="align-middle">
                            Armenia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/au/flat/64.png"
                                alt="Australia flag">
                        </td>
                        <td class="align-middle">
                            Australia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/at/flat/64.png"
                                alt="Austria flag">
                        </td>
                        <td class="align-middle">
                            Austria
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Sender ID will be overwritten towards Lycamobile network.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/bh/flat/64.png"
                                alt="Bahrain flag">
                        </td>
                        <td class="align-middle">
                            Bahrain
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Betelco may overwrite sender ID. The following content is not allowed: Adult, Political and
                            Religious.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/bd/flat/64.png"
                                alt="Bangladesh flag">
                        </td>
                        <td class="align-middle">
                            Bangladesh
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are supported. The networks are filtering messages that
                            contain keywords such as "police".
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/be/flat/64.png"
                                alt="Belgium flag">
                        </td>
                        <td class="align-middle">
                            Belgium
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                No
                            </span>
                        </td>
                        <td class="align-middle">
                            *Belgacom will change Alphanumeric sender ID to a random numeric sender ID.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/bz/flat/64.png"
                                alt="Belize flag">
                        </td>
                        <td class="align-middle">
                            Belize
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/bj/flat/64.png"
                                alt="Benin flag">
                        </td>
                        <td class="align-middle">
                            Benin
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            MTN and Telcel does not accept numeric sender ID.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/bq/flat/64.png"
                                alt="Bonaire, Sint Eustatius and Saba flag">
                        </td>
                        <td class="align-middle">
                            Bonaire, Sint Eustatius and Saba
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ba/flat/64.png"
                                alt="Bosnia and Herzegovina flag">
                        </td>
                        <td class="align-middle">
                            Bosnia and Herzegovina
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            BH Telecom overwrite numeric sender ID to ensure delivery.
                        </td>
                    </tr>

                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/bn/flat/64.png"
                                alt="Brunei Darussalam flag">
                        </td>
                        <td class="align-middle">
                            Brunei Darussalam
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/bg/flat/64.png"
                                alt="Bulgaria flag">
                        </td>
                        <td class="align-middle">
                            Bulgaria
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/kh/flat/64.png"
                                alt="Cambodia flag">
                        </td>
                        <td class="align-middle">
                            Cambodia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/cm/flat/64.png"
                                alt="Cameroon flag">
                        </td>
                        <td class="align-middle">
                            Cameroon
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ca/flat/64.png"
                                alt="Canada flag">
                        </td>
                        <td class="align-middle">
                            Canada
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_note') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Canada is no longer supported. This may change in the future.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/td/flat/64.png"
                                alt="Chad flag">
                        </td>
                        <td class="align-middle">
                            Chad
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/cn/flat/64.png"
                                alt="China flag">
                        </td>
                        <td class="align-middle">
                            China
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Sender ID will be overwritten to a numeric sender ID ensure delivery. China networks have
                            many filters in place to block message in and out of the country.
                        </td>
                    </tr>

                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/cd/flat/64.png"
                                alt="Congo Dem. Rep. flag">
                        </td>
                        <td class="align-middle">
                            Congo Dem. Rep.
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/cg/flat/64.png"
                                alt="Congo flag">
                        </td>
                        <td class="align-middle">
                            Congo
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            May sometimes overwrite numeric Sender ID.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/cy/flat/64.png"
                                alt="Congo Dem. Rep. flag">
                        </td>
                        <td class="align-middle">
                            Cyprus
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>

                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/dk/flat/64.png"
                                alt="Denmark flag">
                        </td>
                        <td class="align-middle">
                            Denmark
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/eg/flat/64.png"
                                alt="Egypt flag">
                        </td>
                        <td class="align-middle">
                            Egypt
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sv/flat/64.png"
                                alt="El Salvador flag">
                        </td>
                        <td class="align-middle">
                            El Salvador
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Sender IDs are Overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ee/flat/64.png"
                                alt="Estonia flag">
                        </td>
                        <td class="align-middle">
                            Estonia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/et/flat/64.png"
                                alt="Ethiopia flag">
                        </td>
                        <td class="align-middle">
                            Ethiopia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/fm/flat/64.png"
                                alt="Micronesia flag">
                        </td>
                        <td class="align-middle">
                            Federated States of Micronesia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/fi/flat/64.png"
                                alt="Finland flag">
                        </td>
                        <td class="align-middle">
                            Finland
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/fr/flat/64.png"
                                alt="France flag">
                        </td>
                        <td class="align-middle">
                            France
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_note') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Numeric sender IDs are not supported. The carriers SFR, Bouygues and Orange will only accept
                            messages
                            with spoofed sender IDs for delivery between 8am and 8pm local time Monday to Saturday.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/gf/flat/64.png"
                                alt="French Guiana flag">
                        </td>
                        <td class="align-middle">
                            French Guiana
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ga/flat/64.png"
                                alt="Gabon flag">
                        </td>
                        <td class="align-middle">
                            Gabon
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ge/flat/64.png"
                                alt="Georgia flag">
                        </td>
                        <td class="align-middle">
                            Georgia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/de/flat/64.png"
                                alt="Germany flag">
                        </td>
                        <td class="align-middle">
                            Germany
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/gi/flat/64.png"
                                alt="Gibraltar flag">
                        </td>
                        <td class="align-middle">
                            Gibraltar
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/gr/flat/64.png"
                                alt="Greece flag">
                        </td>
                        <td class="align-middle">
                            Greece
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/gg/flat/64.png"
                                alt="Guernsey flag">
                        </td>
                        <td class="align-middle">
                            Guernsey
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/gn/flat/64.png"
                                alt="Guinea flag">
                        </td>
                        <td class="align-middle">
                            Guinea
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/gy/flat/64.png"
                                alt="Guyana flag">
                        </td>
                        <td class="align-middle">
                            Guyana
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>

                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/hk/flat/64.png"
                                alt="Hong Kong flag">
                        </td>
                        <td class="align-middle">
                            Hong Kong
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_note') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Numeric sender IDs will be overwritten.
                            Spoofing supported by CSL (45400), Hutchison (45404), SmarTone (45406) and PCCW (45416).
                            Other networks will have sender IDs replaced by local Hong Kong numbers to ensure delivery.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/hu/flat/64.png"
                                alt="Hungary flag">
                        </td>
                        <td class="align-middle">
                            Hungary
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/is/flat/64.png"
                                alt="Iceland flag">
                        </td>
                        <td class="align-middle">
                            Iceland
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/in/flat/64.png"
                                alt="India flag">
                        </td>
                        <td class="align-middle">
                            India
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/id/flat/64.png"
                                alt="Indonesia flag">
                        </td>
                        <td class="align-middle">
                            Indonesia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ir/flat/64.png"
                                alt="Iran flag">
                        </td>
                        <td class="align-middle">
                            Iran
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Supported by Irancell and Righte.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/iq/flat/64.png"
                                alt="Iraq flag">
                        </td>
                        <td class="align-middle">
                            Iraq
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ie/flat/64.png"
                                alt="Ireland flag">
                        </td>
                        <td class="align-middle">
                            Ireland
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/il/flat/64.png"
                                alt="Israel flag">
                        </td>
                        <td class="align-middle">
                            Israel
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/it/flat/64.png"
                                alt="Italy flag">
                        </td>
                        <td class="align-middle">
                            Italy
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">Italy is no longer supported.</td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ci/flat/64.png"
                                alt="Ivory Coast flag">
                        </td>
                        <td class="align-middle">
                            Ivory Coast
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/jp/flat/64.png"
                                alt="Japan flag">
                        </td>
                        <td class="align-middle">
                            Japan
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/je/flat/64.png"
                                alt="Jersey flag">
                        </td>
                        <td class="align-middle">
                            Jersey
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ki/flat/64.png"
                                alt="Kiribati flag">
                        </td>
                        <td class="align-middle">
                            Kiribati
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/kr/flat/64.png"
                                alt="South Korea flag">
                        </td>
                        <td class="align-middle">
                            South Korea
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_note') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Only numerical sender IDs are fully fupported. Alphanumeric Sender IDs will be overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/kg/flat/64.png"
                                alt="Kyrgyzstan flag">
                        </td>
                        <td class="align-middle">
                            Kyrgyzstan
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            All Sender IDs will be overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/la/flat/64.png"
                                alt="Laos flag">
                        </td>
                        <td class="align-middle">
                            Laos
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/lv/flat/64.png"
                                alt="Latvia flag">
                        </td>
                        <td class="align-middle">
                            Latvia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/lb/flat/64.png"
                                alt="Lebanon flag">
                        </td>
                        <td class="align-middle">
                            Lebanon
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_note') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">Due to new regulations numerical sender IDs are no longer supported.
                            Alphanumeric sender IDs still work.</td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ly/flat/64.png"
                                alt="Laos flag">
                        </td>
                        <td class="align-middle">
                            Libya
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender IDs will be Overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/lt/flat/64.png"
                                alt="Lithuania flag">
                        </td>
                        <td class="align-middle">
                            Lithuania
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/lu/flat/64.png"
                                alt="Luxembourg flag">
                        </td>
                        <td class="align-middle">
                            Luxembourg
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mo/flat/64.png"
                                alt="Macao flag">
                        </td>
                        <td class="align-middle">
                            Macao
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mk/flat/64.png"
                                alt="Macedonia flag">
                        </td>
                        <td class="align-middle">
                            Macedonia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Alphanumeric Sender IDs are not supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/my/flat/64.png"
                                alt="Malaysia flag">
                        </td>
                        <td class="align-middle">
                            Malaysia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *All Sender IDs will be overwritten to a random Shortcode.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mv/flat/64.png"
                                alt="Maldives flag">
                        </td>
                        <td class="align-middle">
                            Maldives
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender ID are not supported and will be Overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mt/flat/64.png"
                                alt="Malta flag">
                        </td>
                        <td class="align-middle">
                            Malta
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mh/flat/64.png"
                                alt="Marshall Islands flag">
                        </td>
                        <td class="align-middle">
                            Marshall Islands
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mu/flat/64.png"
                                alt="Mauritius flag">
                        </td>
                        <td class="align-middle">
                            Mauritius
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender ID are not supported and will be Overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/yt/flat/64.png"
                                alt="Mayotte flag">
                        </td>
                        <td class="align-middle">
                            Mayotte
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mx/flat/64.png"
                                alt="Mexico flag">
                        </td>
                        <td class="align-middle">
                            Mexico
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Numeric Sender ID are not Supported and will be Overwritten
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/md/flat/64.png"
                                alt="Moldova flag">
                        </td>
                        <td class="align-middle">
                            Moldova
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mc/flat/64.png"
                                alt="Monaco flag">
                        </td>
                        <td class="align-middle">
                            Monaco
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mn/flat/64.png"
                                alt="Mongolia flag">
                        </td>
                        <td class="align-middle">
                            Mongolia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Alphanumeric Sender IDs are Supported by GMobile and Mobicom. Numeric Sender ID are
                            Supported by Unitel
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mm/flat/64.png"
                                alt="Myanmar flag">
                        </td>
                        <td class="align-middle">
                            Myanmar
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>

                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/np/flat/64.png"
                                alt="Nepal flag">
                        </td>
                        <td class="align-middle">
                            Nepal
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/nl/flat/64.png"
                                alt="Netherlands flag">
                        </td>
                        <td class="align-middle">
                            Netherlands
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/nz/flat/64.png"
                                alt="New Zealand flag">
                        </td>
                        <td class="align-middle">
                            New Zealand
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are Supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ni/flat/64.png"
                                alt="Nicaragua flag">
                        </td>
                        <td class="align-middle">
                            Nicaragua
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Sender ID will be overwritten to ensure delivery.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ne/flat/64.png"
                                alt="Niger flag">
                        </td>
                        <td class="align-middle">
                            Niger
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            There are additional content restrictions beyond those mentioned in our Terms &amp;
                            Conditions. The following content is not allowed: Adult &amp; Political
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ng/flat/64.png"
                                alt="Nigeria flag">
                        </td>
                        <td class="align-middle">
                            Nigeria
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are Supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mp/flat/64.png"
                                alt="Northern Mariana Islands flag">
                        </td>
                        <td class="align-middle">
                            Northern Mariana Islands
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/no/flat/64.png"
                                alt="Norway flag">
                        </td>
                        <td class="align-middle">
                            Norway
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">

                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/om/flat/64.png"
                                alt="Oman flag">
                        </td>
                        <td class="align-middle">
                            Oman
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Only Alphanumeric Sender IDs are Supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/pk/flat/64.png"
                                alt="Pakistan flag">
                        </td>
                        <td class="align-middle">
                            Pakistan
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Alphanumeric Sender ID are Supported by Telenor Pakistan otherwise overwitten.
                            Numeric Sender ID are Supported by Warid Telecomminication, ZONG and Ufone otherwise
                            overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ps/flat/64.png"
                                alt="Palestine flag">
                        </td>
                        <td class="align-middle">
                            Palestine
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *All Sender IDs will be Overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/pg/flat/64.png"
                                alt="Papua New Guinea flag">
                        </td>
                        <td class="align-middle">
                            Papua New Guinea
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/pe/flat/64.png"
                                alt="Peru flag">
                        </td>
                        <td class="align-middle">
                            Peru
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *All Sender IDs will be Overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ph/flat/64.png"
                                alt="Philippines flag">
                        </td>
                        <td class="align-middle">
                            Philippines
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *All Sender IDs will be Overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/pl/flat/64.png"
                                alt="Poland flag">
                        </td>
                        <td class="align-middle">
                            Poland
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Numeric Sender ID will be over Overwritten. Additionally, the networks block traffic from
                            Sender ID's such as operator names and "Police" etc. We suggest that you use your company
                            name as Sender ID.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/pt/flat/64.png"
                                alt="Portugal flag">
                        </td>
                        <td class="align-middle">
                            Portugal
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Carriers have numeric Sender ID filters, so we strongly recommend you use a International
                            format or Aplhanumeric Sender ID to ensure delivery.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/re/flat/64.png"
                                alt="Reunion flag">
                        </td>
                        <td class="align-middle">
                            Reunion
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/mm/flat/64.png"
                                alt="Romania flag">
                        </td>
                        <td class="align-middle">
                            Romania
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender IDs are supported by Cosmote and Vodafone.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ru/flat/64.png"
                                alt="Russia flag">
                        </td>
                        <td class="align-middle">
                            Russia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Some networks allow Alphanumeric Sender ID. Numeric Sender ID are not supported
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/rw/flat/64.png"
                                alt="Rwanda flag">
                        </td>
                        <td class="align-middle">
                            Rwanda
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/st/flat/64.png"
                                alt="Sao Tome and Principe flag">
                        </td>
                        <td class="align-middle">
                            Sao Tome and Principe
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sa/flat/64.png"
                                alt="Saudi Arabia flag">
                        </td>
                        <td class="align-middle">
                            Saudi Arabia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sn/flat/64.png"
                                alt="Senegal flag">
                        </td>
                        <td class="align-middle">
                            Senegal
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/rs/flat/64.png"
                                alt="Serbia flag">
                        </td>
                        <td class="align-middle">
                            Serbia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender IDs are not supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sc/flat/64.png"
                                alt="Seychelles flag">
                        </td>
                        <td class="align-middle">
                            Seychelles
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender IDs are not supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sl/flat/64.png"
                                alt="Sierra Leone flag">
                        </td>
                        <td class="align-middle">
                            Sierra Leone
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender IDs are not supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sg/flat/64.png"
                                alt="Singapore flag">
                        </td>
                        <td class="align-middle">
                            Singapore
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sx/flat/64.png"
                                alt="Sint Maarten flag">
                        </td>
                        <td class="align-middle">
                            Sint Maarten
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.sometimes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-warning">
                                {{ __('text.country.unknown') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sk/flat/64.png"
                                alt="Laos flag">
                        </td>
                        <td class="align-middle">
                            Slovakia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>

                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/si/flat/64.png"
                                alt="Slovenia flag">
                        </td>
                        <td class="align-middle">
                            Slovenia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sb/flat/64.png"
                                alt="Solomon Islands flag">
                        </td>
                        <td class="align-middle">
                            Solomon Islands
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/so/flat/64.png"
                                alt="Somalia flag">
                        </td>
                        <td class="align-middle">
                            Somalia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender ID will be overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/za/flat/64.png"
                                alt="South Africa flag">
                        </td>
                        <td class="align-middle">
                            South Africa
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *All Sender IDs will be overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/es/flat/64.png"
                                alt="Spain flag">
                        </td>
                        <td class="align-middle">
                            Spain
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender IDs are not supported.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/lk/flat/64.png"
                                alt="Sri Lanka flag">
                        </td>
                        <td class="align-middle">
                            Sri Lanka
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sd/flat/64.png"
                                alt="Sudan flag">
                        </td>
                        <td class="align-middle">
                            Sudan
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender ID are not Supported
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sr/flat/64.png"
                                alt="Suriname flag">
                        </td>
                        <td class="align-middle">
                            Suriname
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/sz/flat/64.png"
                                alt="Swaziland flag">
                        </td>
                        <td class="align-middle">
                            Swaziland
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender ID are not Supported
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/se/flat/64.png"
                                alt="Sweden flag">
                        </td>
                        <td class="align-middle">
                            Sweden
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ch/flat/64.png"
                                alt="Switzerland flag">
                        </td>
                        <td class="align-middle">
                            Switzerland
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/tj/flat/64.png"
                                alt="Tajikistan flag">
                        </td>
                        <td class="align-middle">
                            Tajikistan
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender ID are not Supported
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/th/flat/64.png"
                                alt="Thailand flag">
                        </td>
                        <td class="align-middle">
                            Thailand
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            All Sender IDs will be overwritten
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/tl/flat/64.png"
                                alt="Timor-Leste flag">
                        </td>
                        <td class="align-middle">
                            Timor-Leste
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/tg/flat/64.png"
                                alt="Togo flag">
                        </td>
                        <td class="align-middle">
                            Togo
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>

                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/tr/flat/64.png"
                                alt="Turkey flag">
                        </td>
                        <td class="align-middle">
                            Turkey
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            There are additional content restrictions beyond those mentioned in our Terms &amp;
                            Conditions.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ug/flat/64.png"
                                alt="Uganda flag">
                        </td>
                        <td class="align-middle">
                            Uganda
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender ID are not Supported
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/ua/flat/64.png"
                                alt="Ukraine flag">
                        </td>
                        <td class="align-middle">
                            Ukraine
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *Numeric Sender ID are not Supported
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/gb/flat/64.png"
                                alt="United Kingdom flag">
                        </td>
                        <td class="align-middle">
                            United Kingdom (UK)
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            EE network may block traffic using Numeric Sender ID. There are additional content
                            restrictions beyond those mentioned in our Terms &amp; Conditions.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/us/flat/64.png"
                                alt="United States flag">
                        </td>
                        <td class="align-middle">
                            United States (USA)
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            We no longer support USA due to subsequent abuse. This may change in the future.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/uy/flat/64.png"
                                alt="Uruguay flag">
                        </td>
                        <td class="align-middle">
                            Uruguay
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *All Sender IDs will be overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/vn/flat/64.png"
                                alt="Vietnam flag">
                        </td>
                        <td class="align-middle">
                            Vietnam
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-danger">
                                {{ __('text.country.no_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            *All Sender IDs will be overwritten.
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/zm/flat/64.png"
                                alt="Zambia flag">
                        </td>
                        <td class="align-middle">
                            Zambia
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle"></td>
                    </tr>


                    <tr>
                        <td style="width: 40px;" class="align-middle">
                            <img class="img-responsive" width="40" src="https://www.countryflags.io/zw/flat/64.png"
                                alt="Zimbabwe flag">
                        </td>
                        <td class="align-middle">
                            Zimbabwe
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes_star') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            <span class="badge alert-success">
                                {{ __('text.country.yes') }}
                            </span>
                        </td>
                        <td class="align-middle">
                            Numeric Sender IDs are not Supported.
                        </td>
                    </tr>

                    <tr>
                        <td style="width: 40px;" class="align-middle">

                        </td>
                        <td class="align-middle">
                        </td>
                        <td class="align-middle"></td>
                        <td class="align-middle"><strong>{{ __('text.title.disclaimer') }}</strong></td>
                        <td class="align-middle">
                            <small>{{ __('text.country.disclaimer') }}</small>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection