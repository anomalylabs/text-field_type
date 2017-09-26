## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.


### Setting Values[](#usage/setting-values)

You can set the value by string and the text will be automatically generated:

    $entry->example = "Ryan Thompson";

    echo $entry->example; // "Ryan Thompson"


### Basic Output[](#usage/basic-output)

The value returned is always `null` or the text value:

    $entry->example; // "Ryan Thompson"


### Presenter Output[](#usage/presenter-output)

When accessing the field value from a decorated entry model the an instance of `\Anomaly\FilesModule\Text\TextPresenter` will be returned.


#### TextFieldTypePresenter::tel()[](#usage/presenter-output/textfieldtypepresenter-tel)

The `tel` method returns the text wrapped as a `tel:` link.

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$text

</td>

<td>

false

</td>

<td>

string

</td>

<td>

The text value.

</td>

<td>

The text of the link.

</td>

</tr>

<tr>

<td>

$attributes

</td>

<td>

false

</td>

<td>

array

</td>

<td>

null

</td>

<td>

The HTML attributes of the link.

</td>

</tr>

</tbody>

</table>

###### Returns: `string`

###### Example

    $decorated->example->tel(); // <a href="tel:1235554567">1235554567</a>
    $decorated->example->tel('Call me!'); // <a href="tel:1235554567">Call me!</a>

###### Twig

    {{ decorated.example.tel() }} // <a href="tel:1235554567">1235554567</a>
    {{ decorated.example.tel('Call me!') }} // <a href="tel:1235554567">Call me!</a>
