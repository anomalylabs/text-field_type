## Introduction[](#introduction)

`anomaly.field_type.text`

The text field type provides a basic but convenient input.


### Configuration[](#introduction/configuration)

Below is a list of available configuration with default values:

    "example" => [
        "type"   => "anomaly.field_type.text",
        "config" => [
            "type" => "text",
            "mask" => null,
            "min"  => null,
            "max"  => null,
        ]
    ]

###### Configuration

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Example</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

type

</td>

<td>

password

</td>

<td>

The text type. Valid options are `text`, `password`, and `email`.

</td>

</tr>

<tr>

<td>

mask

</td>

<td>

(000) 000-0000

</td>

<td>

The <a href="https://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">input mask</a> pattern.

</td>

</tr>

<tr>

<td>

min

</td>

<td>

5

</td>

<td>

The minumum text length allowed.

</td>

</tr>

<tr>

<td>

max

</td>

<td>

10

</td>

<td>

The maximum text length allowed.

</td>

</tr>

</tbody>

</table>
