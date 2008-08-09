<?php
/**
 * @package sapphire
 * @subpackage search
 */

/**
 * Matches textual content with a substring match from the beginning
 * of the string.
 * 
 * <code>
 *  "abcdefg" => "defg" # false
 *  "abcdefg" => "abcd" # true
 * </code>
 * 
 * @package sapphire
 * @subpackage search
 */
class StartsWithFilter extends SearchFilter {
	
	/**
	 * Applies a substring match on a field value.
	 *
	 * @return unknown
	 */
	public function apply(SQLQuery $query) {
		$query = $this->applyRelation($query);		
		$query->where("LOCATE('{$this->getValue()}', {$this->getName()}) = 1");
	}
	
}
?>