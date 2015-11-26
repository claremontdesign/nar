<?php
if(!empty($category))
{
	$categories = $category->subCategories();
}
else
{
	$categories = cd_nar()->categoryRepo()->all();
}
?>

<?php if(!empty($categories)): ?>
	<ul>
		<?php foreach ($categories as $category): ?>
			<li><a href="{{ $category->url() }}" title="{{ $category->title() }}">{{ $category->title() }}</a>
				{!! view(cd_nar_view_name('category.partial.categories'), compact('category')) !!}
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>