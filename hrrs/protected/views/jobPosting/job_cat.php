<b>Search Job By Category</b>

<ul>
<?php foreach ($model as $mod): ?>
       <li><?php echo CHtml::link($mod->name,array('/jobposting2/update', 'id'=>$model->id)); ?></li>   
<?php endforeach; ?>    
</ul>
