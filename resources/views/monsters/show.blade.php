@extends('template.base')
@section('title', 'Monster')

@section('content')

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eius iusto id asperiores totam commodi earum recusandae inventore beatae quidem, quaerat reprehenderit, dolore architecto unde quo ratione esse, neque ipsum.
Error cumque, ut facilis libero praesentium voluptates doloremque voluptatem expedita, a nam est cum officia, odio pariatur necessitatibus. Perferendis quos quo molestias enim totam ad. Perspiciatis aperiam nemo blanditiis. Corporis.
Dolorem eum adipisci optio molestiae aliquid aspernatur, reprehenderit facere amet eos illo! Ea accusamus animi ipsa culpa qui dolor vel eaque necessitatibus error obcaecati, magnam consequuntur iure quisquam enim veritatis?
Debitis nisi maiores repellat sunt doloremque cupiditate similique, molestias reiciendis ex tenetur ratione, a nobis fugit corporis voluptas esse expedita magni quam et dolorum? Minima assumenda amet asperiores a fugiat?
Minus dicta libero numquam ratione culpa iste reiciendis eum eos iure odio vitae excepturi fugit, aliquam impedit voluptate natus porro corrupti ea dolor magni sapiente. Optio nam itaque dolorum pariatur.
A obcaecati molestiae, delectus harum commodi, labore nisi sequi asperiores sit placeat dignissimos laboriosam minus eum ratione accusantium eveniet expedita alias nam ad fugiat error? Optio eaque natus quas soluta?
Velit in maiores soluta a beatae, aliquid exercitationem iste perferendis delectus magnam porro officia earum mollitia omnis ipsum tenetur vel veniam eaque qui. Necessitatibus qui harum ratione voluptatem, excepturi ullam?
Ad incidunt sint natus blanditiis veniam earum nisi est. Unde dignissimos itaque blanditiis autem dolores dicta id ad amet! Fugit ut consectetur aut veritatis eaque nisi sint deleniti odit provident!
Natus quidem minima incidunt vitae odio consequatur! Quaerat dignissimos eligendi cum pariatur, vel tempore, atque debitis quibusdam autem ea vero repellat ex voluptatibus consequatur, accusantium cupiditate ab veritatis iure in!
Rerum illum ut doloremque quisquam quis eos. Voluptatem, pariatur. Pariatur neque voluptatem optio quisquam atque facilis fuga, aliquam dolor, explicabo sit possimus quo voluptatum sed sint consectetur molestiae exercitationem nesciunt?</p>

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
