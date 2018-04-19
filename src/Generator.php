<?php
	/**
	 * Created by PhpStorm.
	 * User: ghlen
	 * Date: 10/1/17
	 * Time: 8:10 PM
	 */
	declare(strict_types=1);

	namespace HTML;

	use HTML\AttributeTraits\ButtonType;
	use HTML\Bootstrap\BootstrapRow;
	use HTML\Bootstrap\BootstrapTuple;
	use HTML\Bootstrap\Vector;
	use HTML\Bootstrap\bsBtnDanger;
	use HTML\ContentSectioning\Address;
	use HTML\ContentSectioning\Article;
	use HTML\ContentSectioning\Aside;
	use HTML\ContentSectioning\Footer;
	use HTML\ContentSectioning\H;
	use HTML\Forms\Button;
	use HTML\Forms\ButtonSpecializations\Submit;
	use HTML\Forms\Form;
	use HTML\Forms\Label;
	use HTML\Forms\Option;
	use HTML\Forms\Select;
	use HTML\Forms\Textarea;
	use HTML\Forms\TypeSpecializations\Checkbox;
	use HTML\Forms\TypeSpecializations\Hidden;
	use HTML\Forms\TypeSpecializations\Radio;
	use HTML\Forms\TypeSpecializations\Text;
	use HTML\HTMLAttrEnums\ButtonTypeEnum;
	use HTML\HTMLAttrEnums\MethodEnum;
	use HTML\Scripting\Script;
	use HTML\TextContent\Div;

	trait Generator
	{
		public static function address(string $innerhtml): Address { return new Address($innerhtml); }
		public static function article(string $innerhtml): Article { return new Article($innerhtml); }
		public static function aside(string $innerhtml): Aside { return new Aside($innerhtml); }
		public static function footer(string $innerhtml): Footer { return new Footer($innerhtml); }
		public static function h(int $depth): H { return new H($depth); }
		public static function button(ButtonTypeEnum $type, string $innerhtml): Button { return new Button($type, $innerhtml); }
		public static function form(string $action, MethodEnum $method): Form { return new Form($action, $method); }
		public static function label(string $for, string $labelContent): Label { return new Label($for, $labelContent); }
		public static function option(string $innerhtml): Option { return new Option($innerhtml); }
		public static function select(string $name, array $possibleValues) { return new Select($name, $possibleValues); }
		public static function textarea(string $name, string $innerhtml = "", bool $required): Textarea { return new Textarea($name, $innerhtml, $required); }
		public static function checkbox(string $name, string $value, bool $checked = false): Checkbox { return new Checkbox($name, $value, $checked); }
		public static function hidden(string $name, string $value): Hidden { return new Hidden($name, $value); }
		public static function radio(string $name, string $value, bool $checked = false): Radio { return new Radio($name, $value, $checked); }
		public static function submit(string $innerHTML): Submit { return new Submit($innerHTML); }
		public static function text(string $name, string $val): Text { return new Text($name, $val); }
		public static function div(string $id = "", string $classes = ""): Div { return new Div($id, $classes); }
		public static function vector(string $name, string $template): Vector { return new Vector($name, $template); }
		public static function bsTuple(string $name, ...$inputControls): BootstrapTuple { return new BootstrapTuple($name, ...$inputControls); }
		public static function bsRow(string $id = "", string $classes = ""): BootstrapRow { return new BootstrapRow($id, $classes); }
		public static function script(string $src) : Script { return new Script($src); }
		public static function bsBtnDanger(ButtonTypeEnum $type, string $innerhtml, string $name="", string $value="") : bsBtnDanger { return new bsBtnDanger($type, $innerhtml, $name, $value); }
	}