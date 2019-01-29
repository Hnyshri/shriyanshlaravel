@extends('layouts.app')

@section('content')



        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Alpaca</span> - Advanced Inputs</h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li><a href="alpaca_advanced.html">Alpaca</a></li>
                        <li class="active">Advanced inputs</li>
                    </ul>

                    <ul class="breadcrumb-elements">
                        <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear position-left"></i>
                                Settings
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Option trees -->
                <h6 class="content-group text-semibold">
                    Option trees
                    <small class="display-block">Dependent option trees</small>
                </h6>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Option tree field</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">This example asks a user what number they would like on the sports jersey. They're always able to just type in a value. Here, we provide a sequence of dropdowns to let them select a sport, team and athlete. The jersey number is then automatically filled in.</p>
                                <div id="alpaca-option-tree"></div>
                                <a href="#alpaca-option-tree-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-option-tree-source">
										<pre class="language-javascript"><code>// Option tree field
$("#alpaca-option-tree").alpaca({
    "schema": {
        "type": "number",
        "title": "What number would like for your sports jersey?"
    },
    "options": {
        "type": "optiontree",
        "tree": {
            "selectors": {
                "sport": {
                    "schema": {
                        "type": "string"
                    },
                    "options": {
                        "type": "select",
                        "noneLabel": "Pick a Sport..."
                    }
                },
                "team": {
                    "schema": {
                        "type": "string"
                    },
                    "options": {
                        "type": "select",
                        "noneLabel": "Pick a Team..."
                    }
                },
                "player": {
                    "schema": {
                        "type": "string"
                    },
                    "options": {
                        "type": "select",
                        "noneLabel": "Pick a Player..."
                    }
                }
            },
            "order": ["sport", "team", "player"],
            "data": [{
                "value": 23,
                "attributes": {
                    "sport": "Basketball",
                    "team": "Chicago Bulls",
                    "player": "Michael Jordan"
                }
            }, {
                "value": 33,
                "attributes": {
                    "sport": "Basketball",
                    "team": "Chicago Bulls",
                    "player": "Scotty Pippen"
                }
            }, {
                "value": 4,
                "attributes": {
                    "sport": "Football",
                    "team": "Green Bay Packers",
                    "player": "Brett Favre"
                }
            }, {
                "value": 19,
                "attributes": {
                    "sport": "Baseball",
                    "team": "Milwaukee Brewers",
                    "player": "Robin Yount"
                }
            }, {
                "value": 99,
                "attributes": {
                    "sport": "Hockey",
                    "player": "Wayne Gretzky"
                }
            }],
            "horizontal": true
        },
        "form": {
            "buttons": {
                "submit": {
                    "click": function() {
                        alert("Value is: " + this.getValue());
                    }
                }
            }
        }
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Using connector</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example produces the same form, but uses a connector to load the schema and options. The options JSON is loaded and merged with some inline options that provide to override a submit click handler.</p>
                                <div id="alpaca-option-tree-connector"></div>
                                <a href="#alpaca-option-tree-connector-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-option-tree-connector-source">
										<pre class="language-javascript"><code>// Using connector
$("#alpaca-option-tree-connector").alpaca({
    "schemaSource": "../default/assets/demo_data/alpaca/optiontree-custom-schema.json",
    "optionsSource": "../default/assets/demo_data/alpaca/optiontree-custom-options.json"
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /opton trees -->


                <!-- Full CKEditor -->
                <h6 class="content-group text-semibold">
                    CKEditor field
                    <small class="display-block">Render CKEditor editor</small>
                </h6>

                <div class="panel panel-flat content-group-lg">
                    <div class="panel-heading">
                        <h6 class="panel-title">Full featured editor</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <p class="content-group">The <code>ckeditor</code> field. The CK Editor field renders the CK editor control that allows users to visually work with HTML and save the results back into a text property. This is a full example of the CK Editor at work. The point here is to show how it looks in full. In the examples that follow, we'll trim this down. Note - CKeditor must be included in your page ahead of the control loading in order for this to work properly.</p>

                        <div id="alpaca-ckeditor-full"></div>
                    </div>
                </div>
                <!-- /full CKEditor -->


                <!-- Input types -->
                <h6 class="content-group text-semibold">
                    Input types
                    <small class="display-block">Supported input types</small>
                </h6>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Lowercase</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates how Alpaca library can format text inside input field. To apply <code>lowercase</code> text style, set <code>format</code> option to <code>lowercase</code> inside <code>schema</code> parameter.</p>
                                <div id="alpaca-lowercase"></div>
                                <a href="#alpaca-lowercase-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-lowercase-source">
										<pre class="language-javascript"><code>// Lowercase
$("#alpaca-lowercase").alpaca({
    "data": "Ice cream is wonderful.",
    "schema": {
        "format": "lowercase"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Uppercase</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates how Alpaca library can format text inside input field. To apply <code>uppercase</code> text style, set <code>format</code> option to <code>uppercase</code> inside <code>schema</code> parameter.</p>
                                <div id="alpaca-uppercase"></div>
                                <a href="#alpaca-uppercase-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-uppercase-source">
										<pre class="language-javascript"><code>// Uppercase
$("#alpaca-uppercase").alpaca({
    "data": "Ice cream is wonderful.",
    "schema": {
        "format": "uppercase"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Search type</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The <code>search</code> field implements a search box that provides a search-optimized control. It allows for the specification of search terms with an optimized user interface. It uses the HTML5 'search' input type, but not the actual search.</p>
                                <div id="alpaca-search"></div>
                                <a href="#alpaca-search-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-search-source">
										<pre class="language-javascript"><code>// Search type
$("#alpaca-search").alpaca({
    "data": "Where for art thou Romeo?",
    "schema": {
        "type": "string"
    },
    "options": {
        "type": "search",
        "label": "Search"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Integer type</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>integer</code> field with data, options and schema parameters. Minimum value is set to 18, maximum to 25. Validation is also enabled, try to change input value to see it in action.</p>
                                <div id="alpaca-integer"></div>
                                <a href="#alpaca-integer-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-integer-source">
										<pre class="language-javascript"><code>// Integer type
$("#alpaca-integer").alpaca({
    "data": 17,
    "options": {
        "type": "integer",
        "label": "Age:",
        "helper": "Guess Taylor Swift's Age"
    },
    "schema": {
        "minimum": 18,
        "maximum": 25,
        "exclusiveMinimum": true,
        "exclusiveMaximum": true,
        "divisibleBy": 2
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Password type</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>password</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters.</p>
                                <div id="alpaca-password"></div>
                                <a href="#alpaca-password-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-password-source">
										<pre class="language-javascript"><code>// Password type
$("#alpaca-password").alpaca({
    "data": "password",
    "schema": {
        "format": "password"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Email type</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>email</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
                                <div id="alpaca-email"></div>
                                <a href="#alpaca-email-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-email-source">
										<pre class="language-javascript"><code>// Email type
$("#alpaca-email").alpaca({
    "data": "support",
    "schema": {
        "format": "email"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">IPv4 type</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>ipv4</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
                                <div id="alpaca-ipv4"></div>
                                <a href="#alpaca-ipv4-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-ipv4-source">
										<pre class="language-javascript"><code>// IP address type
$("#alpaca-ipv4").alpaca({
    "data": "100.60",
    "schema": {
        "format": "ip-address"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">URL type</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>url</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
                                <div id="alpaca-url"></div>
                                <a href="#alpaca-url-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-url-source">
										<pre class="language-javascript"><code>// URL type
$("#alpaca-url").alpaca({
    "data": "http://www.alpacajs.org",
    "options": {
        "type": "url"
    },
    "schema": {
        "format": "uri"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Currency type</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>currency</code> field type. Here input doesn't have any optional parameters, but a very basic setup. The currency field uses the JQuery Price Format plugin to render format the input as it's entered.</p>
                                <div id="alpaca-currency"></div>
                                <a href="#alpaca-currency-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-currency-source">
										<pre class="language-javascript"><code>// Currency type
$("#alpaca-currency").alpaca({
    "options": {
        "type": "currency"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Personal name type</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates custom <code>personal name</code> field type. Every time you press space key, new word starts with capital letter. This input field type supports all available options and parameters. Validation enabled by default.</p>
                                <div id="alpaca-name"></div>
                                <a href="#alpaca-name-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-name-source">
										<pre class="language-javascript"><code>// Personal name type
$("#alpaca-name").alpaca({
    "data": "Oscar Zoroaster Phadrig Isaac Norman Henkel Emmannuel Ambroise Diggs",
    "options": {
        "type": "personalname"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input types -->



                <!-- File inputs -->
                <h6 class="content-group text-semibold">
                    File inputs
                    <small class="display-block">Default and optional styling</small>
                </h6>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Basic file input</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates a basic single file input. This input field type supports all available options and parameters. Additionally you can specify schema format. Validation is disabled by default.</p>
                                <div id="alpaca-file"></div>
                                <a href="#alpaca-file-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-file-source">
										<pre class="language-javascript"><code>// Basic file input
$("#alpaca-file").alpaca({
    "data": "",
    "options": {
        "type": "file",
        "label": "Ice Cream Photo:",
        "helper": "Pick your favorite ice cream picture."
    },
    "schema": {
        "type": "string",
        "format": "uri"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Static mode</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates a basic single file input in <code>read only</code> mode. This input field type supports all available options and parameters. Additionally you can specify schema format. Validation is disabled by default.</p>
                                <div id="alpaca-file-static"></div>
                                <a href="#alpaca-file-static-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-file-static-source">
										<pre class="language-javascript"><code>// Static mode
$("#alpaca-file-static").alpaca({
    "data": "/abc.html",
    "options": {
        "type": "file",
        "label": "Ice Cream Photo:",
        "helper": "Pick your favorite ice cream picture."
    },
    "schema": {
        "type": "string",
        "format": "uri"
    },
    "view": "bootstrap-display"
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Styled file input</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates a single file input styled with <code>uniform</code> plugin. This is optional configuration, Alpaca doesn't support it by default and doesn't have custom field type. Also supports all available options.</p>
                                <div id="alpaca-file-styled"></div>
                                <a href="#alpaca-file-styled-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-file-styled-source">
										<pre class="language-javascript"><code>// Styled file input
$("#alpaca-file-styled").alpaca({
    "data": "",
    "options": {
        "type": "file",
        "label": "Ice Cream Photo:",
        "helper": "Pick your favorite ice cream picture.",
        "id": "file-styled",
    },
    "schema": {
        "type": "string",
        "format": "uri"
    },
    "postRender": function(control) {
        $("#file-styled").uniform({
            fileButtonClass: 'action btn bg-blue'
        });
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Disabled file input</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates a single file input styled with <code>uniform</code> plugin in <code>disabled</code> mode. This is optional configuration, Alpaca doesn't support it by default and doesn't have custom field type. Also supports all available options.</p>
                                <div id="alpaca-file-disabled"></div>
                                <a href="#alpaca-file-disabled-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-file-disabled-source">
										<pre class="language-javascript"><code>// Disabled file input
$("#alpaca-file-disabled").alpaca({
    "data": "",
    "options": {
        "type": "file",
        "label": "Ice Cream Photo:",
        "helper": "Pick your favorite ice cream picture.",
        "disabled": true,
        "id": "file-styled-disabled"
    },
    "schema": {
        "type": "string",
        "format": "uri"
    },
    "postRender": function(control) {
        $("#file-styled-disabled").uniform({
            fileButtonClass: 'action btn bg-blue'
        });
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /file inputs -->



                <!-- Select helpers -->
                <h6 class="content-group text-semibold">
                    Select helpers
                    <small class="display-block">Country and state selects</small>
                </h6>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Country selector</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>country</code> field with default settings. To use this kind of select helper, just set <code>type</code> option to <code>country</code> in your configuration. Supports all available options.</p>
                                <div id="alpaca-country"></div>
                                <a href="#alpaca-country-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-country-source">
										<pre class="language-javascript"><code>// Country selector
$("#alpaca-country").alpaca({
    "options": {
        "type": "country"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">State selector</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>state</code> field with default settings. To use this kind of select helper, just set <code>type</code> option to <code>state</code> in your configuration. Supports all available options.</p>
                                <div id="alpaca-state"></div>
                                <a href="#alpaca-state-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-state-source">
										<pre class="language-javascript"><code>// State selector
$("#alpaca-state").alpaca({
    "options": {
        "type": "state"
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Searchable select</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>country</code> field with integrated Select2 plugin. To initialize Select2 on select, you need to add init code in <code>postRender</code> callback. Supports all available options.</p>
                                <div id="alpaca-country-search"></div>
                                <a href="#alpaca-country-search-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-country-search-source">
										<pre class="language-javascript"><code>// Searchable country selector
$("#alpaca-country-search").alpaca({
    "options": {
        "type": "country",
        "id": "country-search"
    },
    "postRender": function(control) {
        $('#country-search').select2();
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Searchable select</h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group">The following example demonstrates <code>state</code> field with integrated Select2 plugin. To initialize Select2 on select, you need to add init code in <code>postRender</code> callback. Supports all available options.</p>
                                <div id="alpaca-state-search"></div>
                                <a href="#alpaca-state-search-source" data-toggle="collapse"><i class="icon-embed2 position-left"></i> Show source code &rarr;</a>
                                <div class="collapse mt-10" id="alpaca-state-search-source">
										<pre class="language-javascript"><code>// Searchable state selector
$("#alpaca-state-search").alpaca({
    "options": {
        "type": "country",
        "id": "state-search"
    },
    "postRender": function(control) {
        $('#state-search').select2();
    }
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /select helpers -->


            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

@endsection
