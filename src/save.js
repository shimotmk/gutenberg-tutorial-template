import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	return (
		<p {...useBlockProps.save()}>
			{__(
				'Gutenberg Tutorial Template – hello from the saved content!',
				'gutenberg-tutorial-template'
			)}
		</p>
	);
}
