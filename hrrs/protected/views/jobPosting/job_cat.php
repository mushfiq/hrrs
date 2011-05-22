<b>Search Job By Category</b>

<ul>
<?php foreach ($model as $mod): ?>
       <li><?php echo CHtml::link($mod->name,array('/jobposting/joblist', 'id'=>$mod->id)); ?></li>   
<?php endforeach; ?>    
</ul>
