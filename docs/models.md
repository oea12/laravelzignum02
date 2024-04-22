Thor\Models
======

Thor CMS base models and traits implementing Translatable, Treeable, Imageable and Pageable

## Features

### Traits and interfaces
* Base model with auto validation before saving and :unique id auto resolver
* **Imageable** (polymorphic): A model that may have related images can use this trait. All models will share a centric images table.
* **Translatable**: For models that may have translatable fields. Each translatable model must have its own *_texts table.
* **Pageable**: For models that may be resolved through an URL and have many page common fields like: title,
window title, meta tags, canonical, etc. It's a superset of Translatable
* **Treeable**: For models that may have a parent and/or children of the same type.

### Core models
* **User** (Confide)
* **Role** (Entrust)
* **Permission** (Entrust)
* **Language**
* **Module**
* **Image**
* **Page**
* **PageText**


### Why mixing Traits and Interfaces?
Because if you only use traits you can't do things like: `B instanceof XInterface`

in that case, you should use `in_array('XTrait', class_uses('B'))`, where you can easily
do more mistakes.

Interfaces also helps you to decide how models should be implemented, where traits not.


### To-Do

* Tests