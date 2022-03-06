# Ifruit
Apple's web site replica to trainning

Install package

```
composer udpate
```

Run serveur

```
symfony serve
```

## Entity

To create entity (create class of databse table)

`php bin/console make:entity`

### Option

+ Choose entity name
+ Add property name / Add type property / Add length (optional) / Default is nul (yes/no)
+ Add a other property or next (press enter)

### Create migration

Migration is created to insert a table related to the recently created entity

`php bin/console make:migration`

After the migration create, use this command to execute the migration to add this table on your database

`php bin/console doctrine:migration:migrate`

## Form

To create a form, use this command

`php bin/console make:form`

### Option

+ Choose form name
+ Enter entity name used with this form

### Add form in entity controller

_Controller file_

First, import the different classes

```php

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\IsuperOrdiProduct;
use App\Form\IsuperOrdiType;

```

After, create class annd index function (or a other name) with `Request` and `ManagerRegistry` arguments

```php

class IsuperOrdiController extends AbstractController
{
    public function index(Request $request, ManagerRegistry $doctrine):Response
    {}
}
```

Add on class controller, new oject related to entity, create form and its processing

```php
$isuperOrdi = new IsuperOrdiProduct();
$form = $this->createForm(IsuperOrdiType::class, $isuperOrdi);

       //traitement formuilaire
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $em->persist($isuperOrdi);
            $em->flush();
       }
```

To finish, return render with your templates and add on param this form

```php
return $this->render('iSuperOrdi.html.twig', [
    "form" => $form->createView()
    ]);
```

### Add params on input form

_Form file_

To params on input form, add after input name the type of input `TextType::class` and add option `["attr" => ["class" => "form"] ...]` or other option
```php
->add('name', TextType::class, [
                "attr" => [
                    "class" => "form"
                ]
            ])
```
### Add form in template

_Template file_

Add form in template, firstly add `{{ form_start(form) }}` "form" this your form name declare on controller

```html
{{ form_start(form) }}
```

After, add form row who contane the input name declare on params form

```html
<div class="row_containe">
    {{ form_row(form.name) }}
</div>
```

Add a submit button

```html
<button>
    Add
</button>
```

To finish, add end form

```html
{{ form_end(form) }}
```