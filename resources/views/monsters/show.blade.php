@extends('template.base')
@section('title', 'Monster')

@section('content')

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero possimus ipsam, expedita earum consequuntur, sint impedit quidem sit ipsa hic ab vitae facilis maiores consectetur dignissimos modi laboriosam tenetur itaque.
Nemo quae, eum voluptate esse beatae adipisci placeat assumenda suscipit atque quia nihil id cumque natus nam voluptatum impedit. Expedita accusamus nesciunt nostrum corporis accusantium omnis porro laboriosam animi? Ullam!
Facere magni aliquid, distinctio minima possimus, eveniet tempore corrupti porro ipsam excepturi enim nesciunt est officia amet omnis eaque numquam sint aut praesentium odio expedita a. Vitae minima commodi consectetur!
Velit doloremque porro, odio soluta corrupti quas ex atque delectus eum, accusamus sunt animi expedita unde nostrum dolore maiores quo beatae placeat id, eveniet illo facere iusto? Repudiandae, incidunt voluptatum.
Non expedita hic assumenda repellendus voluptates nemo corporis. Vero, molestias ipsa! Quis excepturi ab neque nostrum! Ex corporis, consectetur voluptatibus totam libero soluta, facere, sed tempore distinctio odit necessitatibus itaque.
Necessitatibus, eligendi non magnam fugit ullam in itaque quia voluptatibus ipsam excepturi amet quidem molestiae vitae nihil ab, quibusdam possimus quisquam provident sed, error ut soluta asperiores repellat! Et, impedit.
Magnam reprehenderit dolores eius culpa dicta quo fuga quas aliquid adipisci doloremque, eveniet, eaque commodi laboriosam placeat, vel eos. Earum mollitia praesentium eius nobis quas culpa animi error qui officiis?
Dolores quo voluptatum nemo ab optio sequi labore cum ipsam maiores amet, soluta quos quas, itaque est recusandae laboriosam. Quas velit odit et minima non, corrupti itaque eveniet fugiat minus.
Laborum quas quos explicabo incidunt distinctio saepe accusantium. Odio maxime ut eligendi delectus sapiente dolores accusamus eaque nemo temporibus. Obcaecati unde eligendi doloremque totam earum explicabo ullam in impedit saepe?
Reprehenderit ducimus eius quod, quae ratione pariatur recusandae expedita aspernatur? Quia tenetur itaque, sunt dignissimos dolore, delectus aliquid earum commodi debitis praesentium repellat aliquam repudiandae voluptas perspiciatis officia, odit placeat.</p>

<h3>{{$monster->name}}</h3>
<div>Index: {{ $monster->index }} </div>
<div>Type: {{ $monster->type }} </div>
<div>Alignment: {{ $monster->alignment }} </div>
<div>Armor_class: {{ $monster->armor_class }} </div>
<div>Hit_points: {{ $monster->hit_points }} </div>
<div>Size: {{ $monster->size }} </div>
<div>Strength: {{ $monster->strength }} </div>
<div>Dexterity: {{ $monster->dexterity }} </div>
<div>Constitution: {{ $monster->constitution }} </div>
<div>Intelligence: {{ $monster->intelligence }} </div>
<div>Wisdom: {{ $monster->wisdom }} </div>
<div>Charisma: {{ $monster->charisma }} </div>
<div>Xp: {{ $monster->xp }} </div>
<div>Challenge_rating: {{ $monster->challenge_rating }} </div>
<div>Hit_dice: {{ $monster->hit_dice }} </div>
<div>Languages: {{ $monster->languages }} </div>

<div>DAJE TUTTA</div>

@endsection
